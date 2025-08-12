<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Helpers\ImageHelper;
use App\Models\Web\Course;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'image',
        'is_verified',
        'is_active',
        'steps',
        'entrance_fee_id',
        'course_id',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class,'role_id');
    }
    public function roles()
    {
        return $this->morphToMany(Role::class, 'model', 'model_has_roles', 'model_id', 'role_id', 'id', 'id');
    }
    public function entrance_fee()
    {
        return $this->belongsTo(EntranceFee::class,'entrance_fee_id');
    }
    public function collegeProfile()
    {
        return $this->hasOne(CollegeProfile::class);
    }
    public function collegeCourses()
    {
        return $this->hasMany(CollegeCourse::class);
    }
    public function studentProfile()
    {
        return $this->hasOne(StudentProfile::class);
    }
    public function teacherProfile()
    {
        return $this->hasOne(TeacherProfile::class);
    }
    public function studentProfileAddresses()
    {
        return $this->hasMany(StudentProfileAddress::class);
    }
    public function payments()
    {
        return $this->hasMany(StudentProfileAddress::class);
    }
    public function studentDocuments()
    {
        return $this->hasMany(StudentDocument::class);
    }
    public function studentPermenantAddress()
    {
        return StudentProfileAddress::where('user_id',$this->id)->where('type','Permenant')->first();
    }
    public function studentPaymentLastest()
    {
        $history  =PaymentHistory::where('user_id',$this->id)->orderBy('id','DESC')->first();
        return $history;
    }
    public function centerMapping()
    {
        $history  =CenterMapping::where('user_id',$this->id)->orderBy('id','DESC')->first();
        return $history;
    }
    public function studentTemparoryAddress()
    {
        return StudentProfileAddress::where('user_id',$this->id)->where('type','Temparory')->first();
    }
    public function studentAcademicQualifications()
    {
        return $this->hasMany(StudentAcademicQualification::class);
    }
    public function getRole()
    {
        return $this->role->name;
    }

    public function setPasswordAttribute($value){
        if (!empty($value)){
            $this->attributes['password'] = Hash::make($value);
        }
    }
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveImage($value,'/uploaded_images/profiles/');
    }

    public function getDocumentCategories()
    {
        $documentCategoryIds = DocumentCategoryEntranceFee::where('entrance_fee_id',$this->entrance_fee_id)
                        ->get()
                        ->pluck('document_category_id')->toArray();

        $documentCategories = DocumentCategory::whereIn('id',$documentCategoryIds)
                ->where('is_ex_service_man',0)
                ->where('is_disabled_person',0)
                ->get();
        return $documentCategories;

    }

    static public function getAdminUser(){
        return self::select('users.*')
                    ->where('role_id','=',6)
                    ->orderBy('id','desc')
                    ->get();
    }
    public function allowAdmitCard()
    {
        if ($this->entrance_fee && Carbon::today()->between(Carbon::parse($this->entrance_fee->download_start_date), Carbon::parse($this->entrance_fee->download_end_date))) {
            return true;
        }
        return false;
    }
    public function getPassportPhoto()
    {
        $category = DocumentCategory::where('name','Passport Photo')->first();
        if ($category) {
            $studentDocument = StudentDocument::where('user_id',$this->id)->where('document_category_id',$category->id)->first();
            return $studentDocument;
        }
        return null;
    }
    public function getSignaturePhoto()
    {
        $category = DocumentCategory::where('name','Signature')->first();
        if ($category) {
            $studentDocument = StudentDocument::where('user_id',$this->id)->where('document_category_id',$category->id)->first();
            return $studentDocument;
        }
        return null;
    }
}

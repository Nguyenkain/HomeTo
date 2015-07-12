<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace {
/**
 * Bookmarks
 *
 * @property integer $id 
 * @property integer $target_id 
 * @property integer $target_type 
 * @property string $username 
 * @property string $created_date 
 * @method static \Illuminate\Database\Query\Builder|\Bookmarks whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Bookmarks whereTargetId($value)
 * @method static \Illuminate\Database\Query\Builder|\Bookmarks whereTargetType($value)
 * @method static \Illuminate\Database\Query\Builder|\Bookmarks whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\Bookmarks whereCreatedDate($value)
 */
	class Bookmarks {}
}

namespace {
/**
 * DesignCompany
 *
 */
	class DesignCompany {}
}

namespace {
/**
 * Direction
 *
 */
	class Direction {}
}

namespace {
/**
 * Feedback
 *
 */
	class Feedback {}
}

namespace {
/**
 * FloorMaterial
 *
 */
	class FloorMaterial {}
}

namespace {
/**
 * Furniture
 *
 */
	class Furniture {}
}

namespace {
/**
 * ImageApartment
 *
 */
	class ImageApartment {}
}

namespace {
/**
 * ImageProject
 *
 */
	class ImageProject {}
}

namespace {
/**
 * Investor
 *
 */
	class Investor {}
}

namespace {
/**
 * ListApartment
 *
 */
	class ListApartment {}
}

namespace {
/**
 * ListDistrict
 *
 */
	class ListDistrict {}
}

namespace {
/**
 * ListProject
 *
 */
	class ListProject {}
}

namespace {
/**
 * ListProvice
 *
 */
	class ListProvice {}
}

namespace {
/**
 * ListUtilities
 *
 * @property integer $ID 
 * @property string $name 
 * @method static \Illuminate\Database\Query\Builder|\ListUtilities whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\ListUtilities whereName($value)
 */
	class ListUtilities {}
}

namespace {
/**
 * ManagementComapny
 *
 */
	class ManagementComapny {}
}

namespace {
/**
 * ReasonReport
 *
 */
	class ReasonReport {}
}

namespace {
/**
 * Report
 *
 */
	class Report {}
}

namespace {
/**
 * User
 *
 * @property integer $id 
 * @property integer $user_type 
 * @property string $first_name 
 * @property string $last_name 
 * @property string $full_name 
 * @property string $username 
 * @property string $email 
 * @property string $gcm_regid 
 * @property string $apn_regid 
 * @property string $password_hash 
 * @property string $api_key 
 * @property string $image 
 * @property string $cover_image 
 * @property string $gender 
 * @property string $birth_date 
 * @property string $address 
 * @property string $city 
 * @property string $country 
 * @property string $state 
 * @property string $zip 
 * @property string $phone 
 * @property string $active_key 
 * @property string $salt 
 * @property string $password_strategy 
 * @property string $requires_new_password 
 * @property string $timestamp 
 * @property integer $last_seen 
 * @property integer $os 
 * @property-write mixed $password 
 * @method static \Illuminate\Database\Query\Builder|\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereUserType($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereFullName($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereGcmRegid($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereApnRegid($value)
 * @method static \Illuminate\Database\Query\Builder|\User wherePasswordHash($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereApiKey($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereCoverImage($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereGender($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereBirthDate($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereState($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereZip($value)
 * @method static \Illuminate\Database\Query\Builder|\User wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereActiveKey($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereSalt($value)
 * @method static \Illuminate\Database\Query\Builder|\User wherePasswordStrategy($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereRequiresNewPassword($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereTimestamp($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereLastSeen($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereOs($value)
 */
	class User {}
}

namespace {
/**
 * Utilities
 *
 * @property integer $ID 
 * @property integer $type 
 * @property integer $project 
 * @property string $image 
 * @property string $description 
 * @method static \Illuminate\Database\Query\Builder|\Utilities whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\Utilities whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\Utilities whereProject($value)
 * @method static \Illuminate\Database\Query\Builder|\Utilities whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\Utilities whereDescription($value)
 */
	class Utilities {}
}


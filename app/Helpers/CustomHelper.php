<?php 
namespace App\Helpers;
use Illuminate\Support\Facades\Hash;
use App\models\Projectype;
use DB;
use Auth;

class CustomHelper{
	static function getProjectType(){
		return Projectype::with('projects')->wherestatus(1)->get();
	}
}
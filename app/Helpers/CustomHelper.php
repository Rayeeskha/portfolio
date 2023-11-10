<?php 
namespace App\Helpers;
use Illuminate\Support\Facades\Hash;
use App\Models\Projectype;
use DB;
use Auth;

class CustomHelper{
	static function getProjectType(){
		return Projectype::with('projects')->wherestatus(1)->get();
	}
}
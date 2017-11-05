<?php
namespace App\Http\Controllers;


use App\User;
use App\Procurement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

	public function postSignUp(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email|unique:users',
			'first_name' => 'required|max:120',
			'password' => 'required|min:4'
			]);

		$email = $request['email'];
		$first_name = $request['first_name'];
		$password = bcrypt($request['password']);

		$user = new User();
		$user->email = $email;
		$user->first_name = $first_name;
		$user->password = $password;

		$user->save();
		/*foreach ( $characters as $character) {
    	$num += $this->getFactorial($index) * $index;
    	$index ++;
		}*/
		return redirect()->route('dashboard');

	}

	public function postSignIn(Request $request)
	{

		$this->validate($request, [
			'email' => 'required',
			'password' => 'required'
			]);
		if(Auth::attempt(['email' => $request['email'],'password' => $request['password']])){
			return redirect()->route('dashboard');
		}
		return redirect()->back();
	}

	public function postSave(Request $request)
	{
		$date = $request['date'];
		$prno = $request['prno'];
		$particulars = $request['particulars'];
		$daterequiredneeded = $request['daterequiredneeded'];
		$total = $request['total'];
		$requestingdivision = $request['requestingdivision'];
		$noticetoproceed = $request['noticetoproceed'];
		$deliverycompletion = $request['deliverycompletion'];
		$acceptanceturnover = $request['acceptanceturnover'];
		$cino = $request['cino'];
		$accounting = $request['accounting'];
		$cashier = $request['cashier'];
		$numberofdayspodelivery = $request['numberofdayspodelivery'];
		$numberofdaysdeliverycashier = $request['numberofdaysdeliverycashier'];
		$procurement = new Procurement();
		$procurement->date = $date;
		$procurement->prno = $prno;
		$procurement->particulars = $particulars;
		$procurement->daterequiredneeded = $daterequiredneeded;
		$procurement->total = $total;
		$procurement->requestingdivision = $requestingdivision;
		$procurement->noticetoproceed = $noticetoproceed;
		$procurement->deliverycompletion = $deliverycompletion;
		$procurement->acceptanceturnover = $acceptanceturnover;
		$procurement->cino = $cino;
		$procurement->accounting = $accounting;
		$procurement->cashier = $cashier;
		$procurement->numberofdayspodelivery = $numberofdayspodelivery;
		$procurement->numberofdaysdeliverycashier = $numberofdaysdeliverycashier;
		$procurement->save();
		/**/
		
		return redirect()->route('dashboard');
	}  

	public function getLogout()
	{
		Auth::Logout();
		return redirect() ->route('login');
	}

}
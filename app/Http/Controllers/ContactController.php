<?php

namespace App\Http\Controllers;

use Exception;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request;
use Illuminate\Contracts\Validation\UnauthorizedException;

class ContactController extends BaseController
{
    public function send ()
    {
    	try 
		{
			/*if (!Request::ajax()) {
				throw new \Exception("Peticion erronea", 1);
			}*/

			$message = array(
				'required' => 'The field :attribute is required.',
				'email'    => 'The field :attribute must be a valid email.'
			);

			$validator = Validator::make(Request::all(), [
				'name'  => 'required|string',
				'email'   => 'required|email',
				'message' => 'required'
			], $message);

			 if ($validator->fails()) {
				throw new UnauthorizedException("Error en validacion de datos", 1);
			}

			$data = array(
				'name'  => Request::input('name'),
				'email' => Request::input('email'),
				'msg'   => Request::input('message')
			);
			
			Mail::send('emails.contact', $data, function($message) use ($data){
				$message->from($data['email'], $data['name']);
				$message->to('info@qamplus.com', 'QAMPlus');
				$message->subject($data['name'].' was contacted through the website');
			});

			return response()->json(null, 200);
		} 
		catch (UnauthorizedException $e) 
		{
			return response()->json(array('message'=>$validator->messages()), 400);
		}
		catch (\Exception $e) 
		{
			return response()->json(array('message'=>$e->getMessage()), 400);
		}
    }
}

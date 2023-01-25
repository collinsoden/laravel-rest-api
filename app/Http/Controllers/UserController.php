<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Get User details.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUser($id = null)
    {
        // Get User details if id is not null
        return User::find($id);
    }
    public function get()
    {
        // Return errorMessage if no id is entered
        return User::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(["data" => User::all(), 'status' => 200]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $req)
    // This creates user account

    {
        try {

            $userEmail = $req['email'];
            $userFullName = $req['name'];
            $userPassword = $req['password'];
            $db = new User();

            if (isset($userEmail) && isset($userFullName) && isset($userPassword)) {
                try {
                    //  Prepare User Information 
                    $db->name = $userFullName;
                    $db->email = $userEmail;
                    $db->password = $userPassword;
                    // Save user Information
                    $saveData = $db->save();

                    if ($saveData) {
                        return response()->json(['message' => " Account created", "name" => $userFullName, 'email' => $userEmail, 'status' => 300]);
                    } else {
                        return response()->json(['error' => ' We could not save you data', 'status' => 300]);
                    }
                } catch (\Throwable $e) {
                    return response()->json(['error' => 'Record not found', 404]);
                }
            } else {
                return response()->json(['error' => ' Enter all fields Corrected, compulsory fields are name, email & password', 'status' => 300]);
            }
        } catch (\Throwable $e) {
            return response()->json(["error" => 'The requested resource is not available', "status" => 404]);
        }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $db = new User();
        $userID = User::find($request['id']);

        // Update User Details here
        if ($userID) {
            // Get User
            $user = User::find($request['id']);
            // Update user information
            $updateInfo =  $user->update([
                'name' => $request['name'],
                'email' => $request['email']
            ]);
        } else {
            // If user ID is not in DB, return 404
            return response()->json(["message" => "Record not found for id '" . $request['id'] . "'", "status" => 404]);
        }

        if ($updateInfo) {
            // Return updated user information
            return response()->json(["body" => ["message" => "Details for user: '" . $request['name'] . "' has been updated",], 'status' => 200]);
        } else {
            return response()->json(["error" => "The request could not be completed, check the ID provided", "status" => 300]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $id)
    {
        try {
            // Get user
            $user = User::find($id['id']);
            // Delete user 
            $user->delete();
        } catch (\Throwable $e) {
            // On Error: return Error message
            return response()->json(["error" => "Request could not be completed", "code" => 501, "msg" => $e]);
        }
        // On success: return response
        return response()->json(["message" => "User deleted", "code" => 200]);
    }
}
# ExtendAPI
A example to utilize the OSSN RESTful API,  it extends the existing API feature and add custom method to system
This component add custom api method (my_custom_end_point) that can be called following way :

    CURL https://www.mywebsite.com/api/v1.0/my_custom_end_point?api_key_token=<my_api_key_token>

The output is simply the comparing two static variables and display api response.

You can edit this component and add more methods by simply adding below in function `my_custom_end_point_register` in file components/ExtendAPI/ossn_com.php

    $methods['v1.0'][] = 'custom_method_second';

Once you added you need to create a file in `components/ExtendAPI/plugins/default/services/v1.0/custom_method_second.php`

## Set success and error response

To set success response use following :

    $params['OssnServices']->successResponse("My message for success goes here");	

For error:

    $params['OssnServices']->throwError('200', "Error response here"); //don't change 200 error code,  in case you want to have own error code , you may change it with your own custom error code.
    
    

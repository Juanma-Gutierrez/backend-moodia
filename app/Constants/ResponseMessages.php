<?php

namespace App\Constants;

class ResponseMessages
{
  // Success messages
  public const SUCCESS = 'Success: ';
  public const SUCCESS_FETCHED = 'Successfully fetched: ';

  // Error messages
  public const ERROR = 'Error: ';
  public const ERROR_FETCHING = 'Error fetching: ';

  // Authorization messages
  public const UNAUTHORIZED = 'Unauthorized';

  // Login/Logout messages
  public const LOGIN_SUCCESS = 'Login successful';
  public const LOGOUT_SUCCESS = 'Logout successful';

  // User messages
  public const EXTENDED_USER_DATA_NOT_FOUND = 'Extended user data not found:';
  public const ROLE_NOT_FOUND = 'Role not found:';
}

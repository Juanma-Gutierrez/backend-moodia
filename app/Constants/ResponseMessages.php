<?php

namespace App\Constants;

class ResponseMessages
{
  // Response message
  public const RESPONSE_MESSAGE = 'message';
  public const RESPONSE_DATA = 'data';
  public const RESPONSE_SUCCESS = 'success';
  public const RESPONSE_ERROR = 'error';

  // Success messages
  public const SUCCESS = 'Success: ';
  public const SUCCESS_FETCHED = 'Successfully fetched: ';
  public const SUCCESS_CREATED = 'Successfully created: ';
  public const SUCCESS_UPDATED = 'Successfully updated: ';
  public const SUCCESS_DELETED = 'Successfully deleted: ';

  // Error messages
  public const ERROR = 'Error: ';
  public const ERROR_NOT_FOUND = 'Error: Not found: ';
  public const ERROR_FETCHING = 'Error fetching: ';
  public const ERROR_CREATING = 'Error creating: ';
  public const ERROR_UPDATING = 'Error updating: ';
  public const ERROR_DELETING = 'Error deleting: ';

  // Authorization messages
  public const UNAUTHORIZED = 'Unauthorized';
  public const ERROR_AUTHENTICATION = 'Error in authentication';

  // Login/Logout messages
  public const LOGIN_SUCCESS = 'Login successful';
  public const LOGOUT_SUCCESS = 'Logout successful';

  // Role messages
  public const ROLE_NOT_FOUND = 'Role not found:';

  // ExtendedUser messages
  public const EXTENDED_USER_DATA_NOT_FOUND = 'Extended user data not found:';

}

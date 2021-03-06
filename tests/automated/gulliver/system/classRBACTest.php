<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.rbac.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:22.
*/

class classRBACTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var RBAC
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new RBAC();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
    */
    protected function tearDown()
    {
    }

    /**
     * This is the default method to test, if the class still having
     * the same number of methods.
    */
    public function testNumberOfMethodsInThisClass()
    {
        $methods = get_class_methods('RBAC');
        $this->assertTrue( count($methods) == 55, "now there are " . count($methods) . " methods.");
    }

    /**
    * @covers RBAC::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('__construct', $methods ), 'exists method __construct' );
        $r = new ReflectionMethod('RBAC', '__construct');
        $params = $r->getParameters();
    }

    /**
    * @covers RBAC::getSingleton
    * @todo   Implement testgetSingleton().
    */
    public function testgetSingleton()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getSingleton', $methods ), 'exists method getSingleton' );
        $r = new ReflectionMethod('RBAC', 'getSingleton');
        $params = $r->getParameters();
    }

    /**
    * @covers RBAC::initRBAC
    * @todo   Implement testinitRBAC().
    */
    public function testinitRBAC()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('initRBAC', $methods ), 'exists method initRBAC' );
        $r = new ReflectionMethod('RBAC', 'initRBAC');
        $params = $r->getParameters();
    }

    /**
    * @covers RBAC::loadUserRolePermission
    * @todo   Implement testloadUserRolePermission().
    */
    public function testloadUserRolePermission()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('loadUserRolePermission', $methods ), 'exists method loadUserRolePermission' );
        $r = new ReflectionMethod('RBAC', 'loadUserRolePermission');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sSystem');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'sUser');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers RBAC::checkAutomaticRegister
    * @todo   Implement testcheckAutomaticRegister().
    */
    public function testcheckAutomaticRegister()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('checkAutomaticRegister', $methods ), 'exists method checkAutomaticRegister' );
        $r = new ReflectionMethod('RBAC', 'checkAutomaticRegister');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'strUser');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'strPass');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers RBAC::VerifyWithOtherAuthenticationSource
    * @todo   Implement testVerifyWithOtherAuthenticationSource().
    */
    public function testVerifyWithOtherAuthenticationSource()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('VerifyWithOtherAuthenticationSource', $methods ), 'exists method VerifyWithOtherAuthenticationSource' );
        $r = new ReflectionMethod('RBAC', 'VerifyWithOtherAuthenticationSource');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sAuthType');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'aUserFields');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'strPass');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
    }

    /**
    * @covers RBAC::VerifyLogin
    * @todo   Implement testVerifyLogin().
    */
    public function testVerifyLogin()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('VerifyLogin', $methods ), 'exists method VerifyLogin' );
        $r = new ReflectionMethod('RBAC', 'VerifyLogin');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'strUser');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'strPass');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers RBAC::verifyUser
    * @todo   Implement testverifyUser().
    */
    public function testverifyUser()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('verifyUser', $methods ), 'exists method verifyUser' );
        $r = new ReflectionMethod('RBAC', 'verifyUser');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'strUser');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::verifyUserId
    * @todo   Implement testverifyUserId().
    */
    public function testverifyUserId()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('verifyUserId', $methods ), 'exists method verifyUserId' );
        $r = new ReflectionMethod('RBAC', 'verifyUserId');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'strUserId');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::userCanAccess
    * @todo   Implement testuserCanAccess().
    */
    public function testuserCanAccess()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('userCanAccess', $methods ), 'exists method userCanAccess' );
        $r = new ReflectionMethod('RBAC', 'userCanAccess');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'perm');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::createUser
    * @todo   Implement testcreateUser().
    */
    public function testcreateUser()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('createUser', $methods ), 'exists method createUser' );
        $r = new ReflectionMethod('RBAC', 'createUser');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'aData');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == Array());
        $this->assertTrue( $params[1]->getName() == 'sRolCode');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
    }

    /**
    * @covers RBAC::updateUser
    * @todo   Implement testupdateUser().
    */
    public function testupdateUser()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('updateUser', $methods ), 'exists method updateUser' );
        $r = new ReflectionMethod('RBAC', 'updateUser');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'aData');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == array());
        $this->assertTrue( $params[1]->getName() == 'sRolCode');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
    }

    /**
    * @covers RBAC::assignRoleToUser
    * @todo   Implement testassignRoleToUser().
    */
    public function testassignRoleToUser()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('assignRoleToUser', $methods ), 'exists method assignRoleToUser' );
        $r = new ReflectionMethod('RBAC', 'assignRoleToUser');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sUserUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->assertTrue( $params[1]->getName() == 'sRolCode');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
    }

    /**
    * @covers RBAC::removeRolesFromUser
    * @todo   Implement testremoveRolesFromUser().
    */
    public function testremoveRolesFromUser()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('removeRolesFromUser', $methods ), 'exists method removeRolesFromUser' );
        $r = new ReflectionMethod('RBAC', 'removeRolesFromUser');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sUserUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
    }

    /**
    * @covers RBAC::changeUserStatus
    * @todo   Implement testchangeUserStatus().
    */
    public function testchangeUserStatus()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('changeUserStatus', $methods ), 'exists method changeUserStatus' );
        $r = new ReflectionMethod('RBAC', 'changeUserStatus');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sUserUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->assertTrue( $params[1]->getName() == 'sStatus');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == 'ACTIVE');
    }

    /**
    * @covers RBAC::removeUser
    * @todo   Implement testremoveUser().
    */
    public function testremoveUser()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('removeUser', $methods ), 'exists method removeUser' );
        $r = new ReflectionMethod('RBAC', 'removeUser');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sUserUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
    }

    /**
    * @covers RBAC::load
    * @todo   Implement testload().
    */
    public function testload()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('load', $methods ), 'exists method load' );
        $r = new ReflectionMethod('RBAC', 'load');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'uid');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::createPermision
    * @todo   Implement testcreatePermision().
    */
    public function testcreatePermision()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('createPermision', $methods ), 'exists method createPermision' );
        $r = new ReflectionMethod('RBAC', 'createPermision');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sCode');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::listAllRoles
    * @todo   Implement testlistAllRoles().
    */
    public function testlistAllRoles()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('listAllRoles', $methods ), 'exists method listAllRoles' );
        $r = new ReflectionMethod('RBAC', 'listAllRoles');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'systemCode');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == 'PROCESSMAKER');
    }

    /**
    * @covers RBAC::getAllRoles
    * @todo   Implement testgetAllRoles().
    */
    public function testgetAllRoles()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getAllRoles', $methods ), 'exists method getAllRoles' );
        $r = new ReflectionMethod('RBAC', 'getAllRoles');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'systemCode');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == 'PROCESSMAKER');
    }

    /**
    * @covers RBAC::getAllRolesFilter
    * @todo   Implement testgetAllRolesFilter().
    */
    public function testgetAllRolesFilter()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getAllRolesFilter', $methods ), 'exists method getAllRolesFilter' );
        $r = new ReflectionMethod('RBAC', 'getAllRolesFilter');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'start');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'limit');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'filter');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
    }

    /**
    * @covers RBAC::listAllPermissions
    * @todo   Implement testlistAllPermissions().
    */
    public function testlistAllPermissions()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('listAllPermissions', $methods ), 'exists method listAllPermissions' );
        $r = new ReflectionMethod('RBAC', 'listAllPermissions');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'systemCode');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == 'PROCESSMAKER');
    }

    /**
    * @covers RBAC::createRole
    * @todo   Implement testcreateRole().
    */
    public function testcreateRole()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('createRole', $methods ), 'exists method createRole' );
        $r = new ReflectionMethod('RBAC', 'createRole');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'aData');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::removeRole
    * @todo   Implement testremoveRole().
    */
    public function testremoveRole()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('removeRole', $methods ), 'exists method removeRole' );
        $r = new ReflectionMethod('RBAC', 'removeRole');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'ROL_UID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::verifyNewRole
    * @todo   Implement testverifyNewRole().
    */
    public function testverifyNewRole()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('verifyNewRole', $methods ), 'exists method verifyNewRole' );
        $r = new ReflectionMethod('RBAC', 'verifyNewRole');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'code');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::updateRole
    * @todo   Implement testupdateRole().
    */
    public function testupdateRole()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('updateRole', $methods ), 'exists method updateRole' );
        $r = new ReflectionMethod('RBAC', 'updateRole');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'fields');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::loadById
    * @todo   Implement testloadById().
    */
    public function testloadById()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('loadById', $methods ), 'exists method loadById' );
        $r = new ReflectionMethod('RBAC', 'loadById');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'ROL_UID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::getRoleUsers
    * @todo   Implement testgetRoleUsers().
    */
    public function testgetRoleUsers()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getRoleUsers', $methods ), 'exists method getRoleUsers' );
        $r = new ReflectionMethod('RBAC', 'getRoleUsers');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'ROL_UID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'filter');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
    }

    /**
    * @covers RBAC::getAllUsersByRole
    * @todo   Implement testgetAllUsersByRole().
    */
    public function testgetAllUsersByRole()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getAllUsersByRole', $methods ), 'exists method getAllUsersByRole' );
        $r = new ReflectionMethod('RBAC', 'getAllUsersByRole');
        $params = $r->getParameters();
    }

    /**
    * @covers RBAC::getAllUsersByDepartment
    * @todo   Implement testgetAllUsersByDepartment().
    */
    public function testgetAllUsersByDepartment()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getAllUsersByDepartment', $methods ), 'exists method getAllUsersByDepartment' );
        $r = new ReflectionMethod('RBAC', 'getAllUsersByDepartment');
        $params = $r->getParameters();
    }

    /**
    * @covers RBAC::getRoleCode
    * @todo   Implement testgetRoleCode().
    */
    public function testgetRoleCode()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getRoleCode', $methods ), 'exists method getRoleCode' );
        $r = new ReflectionMethod('RBAC', 'getRoleCode');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'ROL_UID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::deleteUserRole
    * @todo   Implement testdeleteUserRole().
    */
    public function testdeleteUserRole()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('deleteUserRole', $methods ), 'exists method deleteUserRole' );
        $r = new ReflectionMethod('RBAC', 'deleteUserRole');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'ROL_UID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'USR_UID');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers RBAC::getAllUsers
    * @todo   Implement testgetAllUsers().
    */
    public function testgetAllUsers()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getAllUsers', $methods ), 'exists method getAllUsers' );
        $r = new ReflectionMethod('RBAC', 'getAllUsers');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'ROL_UID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'filter');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
    }

    /**
    * @covers RBAC::assignUserToRole
    * @todo   Implement testassignUserToRole().
    */
    public function testassignUserToRole()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('assignUserToRole', $methods ), 'exists method assignUserToRole' );
        $r = new ReflectionMethod('RBAC', 'assignUserToRole');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'aData');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::getRolePermissions
    * @todo   Implement testgetRolePermissions().
    */
    public function testgetRolePermissions()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getRolePermissions', $methods ), 'exists method getRolePermissions' );
        $r = new ReflectionMethod('RBAC', 'getRolePermissions');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'ROL_UID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'filter');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
    }

    /**
    * @covers RBAC::getAllPermissions
    * @todo   Implement testgetAllPermissions().
    */
    public function testgetAllPermissions()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getAllPermissions', $methods ), 'exists method getAllPermissions' );
        $r = new ReflectionMethod('RBAC', 'getAllPermissions');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'ROL_UID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'PER_SYSTEM');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->assertTrue( $params[2]->getName() == 'filter');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
    }

    /**
    * @covers RBAC::assignPermissionRole
    * @todo   Implement testassignPermissionRole().
    */
    public function testassignPermissionRole()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('assignPermissionRole', $methods ), 'exists method assignPermissionRole' );
        $r = new ReflectionMethod('RBAC', 'assignPermissionRole');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sData');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::assignPermissionToRole
    * @todo   Implement testassignPermissionToRole().
    */
    public function testassignPermissionToRole()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('assignPermissionToRole', $methods ), 'exists method assignPermissionToRole' );
        $r = new ReflectionMethod('RBAC', 'assignPermissionToRole');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sRoleUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'sPermissionUID');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers RBAC::deletePermissionRole
    * @todo   Implement testdeletePermissionRole().
    */
    public function testdeletePermissionRole()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('deletePermissionRole', $methods ), 'exists method deletePermissionRole' );
        $r = new ReflectionMethod('RBAC', 'deletePermissionRole');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'ROL_UID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'PER_UID');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers RBAC::numUsersWithRole
    * @todo   Implement testnumUsersWithRole().
    */
    public function testnumUsersWithRole()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('numUsersWithRole', $methods ), 'exists method numUsersWithRole' );
        $r = new ReflectionMethod('RBAC', 'numUsersWithRole');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'ROL_UID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::createSystem
    * @todo   Implement testcreateSystem().
    */
    public function testcreateSystem()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('createSystem', $methods ), 'exists method createSystem' );
        $r = new ReflectionMethod('RBAC', 'createSystem');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sCode');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::verifyByCode
    * @todo   Implement testverifyByCode().
    */
    public function testverifyByCode()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('verifyByCode', $methods ), 'exists method verifyByCode' );
        $r = new ReflectionMethod('RBAC', 'verifyByCode');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sCode');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::getAllAuthSources
    * @todo   Implement testgetAllAuthSources().
    */
    public function testgetAllAuthSources()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getAllAuthSources', $methods ), 'exists method getAllAuthSources' );
        $r = new ReflectionMethod('RBAC', 'getAllAuthSources');
        $params = $r->getParameters();
    }

    /**
    * @covers RBAC::getAllAuthSourcesByUser
    * @todo   Implement testgetAllAuthSourcesByUser().
    */
    public function testgetAllAuthSourcesByUser()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getAllAuthSourcesByUser', $methods ), 'exists method getAllAuthSourcesByUser' );
        $r = new ReflectionMethod('RBAC', 'getAllAuthSourcesByUser');
        $params = $r->getParameters();
    }

    /**
    * @covers RBAC::getAuthenticationSources
    * @todo   Implement testgetAuthenticationSources().
    */
    public function testgetAuthenticationSources()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getAuthenticationSources', $methods ), 'exists method getAuthenticationSources' );
        $r = new ReflectionMethod('RBAC', 'getAuthenticationSources');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'start');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'limit');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'filter');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
    }

    /**
    * @covers RBAC::getAuthSource
    * @todo   Implement testgetAuthSource().
    */
    public function testgetAuthSource()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getAuthSource', $methods ), 'exists method getAuthSource' );
        $r = new ReflectionMethod('RBAC', 'getAuthSource');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::createAuthSource
    * @todo   Implement testcreateAuthSource().
    */
    public function testcreateAuthSource()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('createAuthSource', $methods ), 'exists method createAuthSource' );
        $r = new ReflectionMethod('RBAC', 'createAuthSource');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'aData');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::updateAuthSource
    * @todo   Implement testupdateAuthSource().
    */
    public function testupdateAuthSource()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('updateAuthSource', $methods ), 'exists method updateAuthSource' );
        $r = new ReflectionMethod('RBAC', 'updateAuthSource');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'aData');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::removeAuthSource
    * @todo   Implement testremoveAuthSource().
    */
    public function testremoveAuthSource()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('removeAuthSource', $methods ), 'exists method removeAuthSource' );
        $r = new ReflectionMethod('RBAC', 'removeAuthSource');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::getAllUsersByAuthSource
    * @todo   Implement testgetAllUsersByAuthSource().
    */
    public function testgetAllUsersByAuthSource()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getAllUsersByAuthSource', $methods ), 'exists method getAllUsersByAuthSource' );
        $r = new ReflectionMethod('RBAC', 'getAllUsersByAuthSource');
        $params = $r->getParameters();
    }

    /**
    * @covers RBAC::getListUsersByAuthSource
    * @todo   Implement testgetListUsersByAuthSource().
    */
    public function testgetListUsersByAuthSource()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getListUsersByAuthSource', $methods ), 'exists method getListUsersByAuthSource' );
        $r = new ReflectionMethod('RBAC', 'getListUsersByAuthSource');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'aSource');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::searchUsers
    * @todo   Implement testsearchUsers().
    */
    public function testsearchUsers()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('searchUsers', $methods ), 'exists method searchUsers' );
        $r = new ReflectionMethod('RBAC', 'searchUsers');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sUID');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'sKeyword');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
    }

    /**
    * @covers RBAC::requirePermissions
    * @todo   Implement testrequirePermissions().
    */
    public function testrequirePermissions()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('requirePermissions', $methods ), 'exists method requirePermissions' );
        $r = new ReflectionMethod('RBAC', 'requirePermissions');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'permissions');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers RBAC::cleanSessionFiles
    * @todo   Implement testcleanSessionFiles().
    */
    public function testcleanSessionFiles()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('cleanSessionFiles', $methods ), 'exists method cleanSessionFiles' );
        $r = new ReflectionMethod('RBAC', 'cleanSessionFiles');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'hours');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '72');
    }

  }

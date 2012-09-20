<?php

namespace Kunstmaan\AdminBundle\Tests\Helper\Security\Acl\Permission;

use Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionDefinition;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-07 at 08:49:46.
 */
class PermissionDefinitionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PermissionDefinition
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PermissionDefinition(array('VIEW'));
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionDefinition::__construct
     * @expectedException \InvalidArgumentException
     */
    public function test__constructThrowsExceptionWithInvalidParameters()
    {
        new PermissionDefinition(array(), null, null);
    }

    /**
     * @covers Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionDefinition::setAlias
     * @covers Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionDefinition::getAlias
     */
    public function testSetGetAlias()
    {
        $this->object->setAlias('alias');
        $this->assertEquals('alias', $this->object->getAlias());
    }

    /**
     * @covers Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionDefinition::setEntity
     * @covers Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionDefinition::getEntity
     */
    public function testSetGetEntity()
    {
        $this->object->setEntity('entity');
        $this->assertEquals('entity', $this->object->getEntity());
    }

    /**
     * @covers Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionDefinition::setPermissions
     * @covers Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionDefinition::getPermissions
     */
    public function testSetGetPermissions()
    {
        $this->object->setPermissions(array('EDIT', 'VIEW'));
        $this->assertEquals(array('EDIT', 'VIEW'), $this->object->getPermissions());
    }

    /**
     * @covers Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionDefinition::setPermissions
     * @expectedException \InvalidArgumentException
     */
    public function testSetPermissionsWithInvalidData()
    {
        $this->object->setPermissions(array());
    }

}

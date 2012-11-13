<?php

/**
 * Tests MslsGetSet
 *
 * @author Dennis Ploetner <re@lloc.de>
 * @package WP_Document_Revisions
 */
class WP_Test_MslsGetSet extends WP_UnitTestCase {

	var $my_obj;

    /**
     * SetUp initial settings
     */
    function setUp() {
        parent::setUp();
        wp_cache_flush();
		$this->my_obj = new MslsGetSet();
    }

    /**
     * Break down for next test
     */
    function tearDown() {
        parent::tearDown();
    }

    /**
     * Verify the get_arr-method
     */
    function test_get_arr_method() {
        $this->my_obj->reset();
        $this->assertEquals( array(), $this->my_obj->get_arr() );
        $this->my_obj->temp = 'test';
        $this->assertEquals( array( 'temp' => 'test' ), $this->my_obj->get_arr() );
    }

}

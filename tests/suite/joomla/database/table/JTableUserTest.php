<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Database
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

require_once JPATH_PLATFORM . '/joomla/database/table/user.php';

/**
 * Test class for JTableUser.
 * Generated by PHPUnit on 2011-12-06 at 03:44:10.
 */
class JTableUserTest extends JoomlaDatabaseTestCase
{
	/**
	 * Gets the data set to be loaded into the database during setup
	 *
	 * @return  xml dataset
	 *
	 * @since   11.1
	 */
	protected function getDataSet()
	{
		return $this->createXMLDataSet(__DIR__.'/stubs/jtableuser.xml');
	}

	/**
	 * @covers JTableUser::load
	 * @todo   Implement testLoad().
	 */
	public function testLoad()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @covers JTableUser::bind
	 * @todo   Implement testBind().
	 */
	public function testBind()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @covers JTableUser::check
	 * @todo   Implement testCheck().
	 */
	public function testCheck()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @covers JTableUser::store
	 * @todo   Implement testStore().
	 */
	public function testStoreNewUser()
	{
		$user = new JTableUser(self::$dbo);

		$user->name = 'Neil Armstrong';
		$user->username = 'neil.armstrong';
		$user->email = 'neil.armstrong@example.com';
		$user->groups = array(
			'Astronauts' => 1,
			'Moon walkers' => 2,
		);

		$this->assertThat(
			$user->store(),
			$this->isTrue(),
			'Checks that the new user stored correctly.'
		);

		self::$dbo->setQuery('SELECT * FROM #__users WHERE id = ' . (int) $user->id);
		$stored = self::$dbo->loadObject();

		$this->assertThat(
			$stored->name,
			$this->equalTo('Neil Armstrong'),
			'Checks that name was stored correctly.'
		);

		$this->assertThat(
			$stored->username,
			$this->equalTo('neil.armstrong'),
			'Checks that username was stored correctly.'
		);

		$this->assertThat(
			$stored->email,
			$this->equalTo('neil.armstrong@example.com'),
			'Checks that email was stored correctly.'
		);

		self::$dbo->setQuery('SELECT group_id FROM #__user_usergroup_map WHERE user_id = ' . (int) $user->id);
		$this->assertThat(
			self::$dbo->loadColumn(),
			$this->equalTo(array(1,2)),
			'Checks that the user group mapping was stored correctly.'
		);

		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test is incomplete.');
	}

	/**
	 * @covers JTableUser::delete
	 * @todo   Implement testDelete().
	 */
	public function testDelete()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @covers JTableUser::setLastVisit
	 * @todo   Implement testSetLastVisit().
	 */
	public function testSetLastVisit()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}
}

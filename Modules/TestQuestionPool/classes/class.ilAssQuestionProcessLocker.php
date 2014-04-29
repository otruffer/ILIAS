<?php
/* Copyright (c) 1998-2013 ILIAS open source, Extended GPL, see docs/LICENSE */

/**
 * @author		Björn Heyser <bheyser@databay.de>
 * @version		$Id$
 *
 * @package     Modules/Test
 */
abstract class ilAssQuestionProcessLocker
{
	const LOCK_MODE_NONE = 'none';
	const LOCK_MODE_FILE = 'file';
	const LOCK_MODE_DB = 'db';
	
	public static function getValidLockModes()
	{
		return array(self::LOCK_MODE_NONE, self::LOCK_MODE_FILE, self::LOCK_MODE_DB);
	}
	
	public function requestPersistWorkingStateLock()
	{
		// overwrite method in concrete locker if something to do
	}
	
	public function releasePersistWorkingStateLock()
	{
		// overwrite method in concrete locker if something to do
	}

	public function requestUserSolutionUpdateLock()
	{
		// overwrite method in concrete locker if something to do
	}
	
	public function releaseUserSolutionUpdateLock()
	{
		// overwrite method in concrete locker if something to do
	}

	public function requestUserQuestionResultUpdateLock()
	{
		// overwrite method in concrete locker if something to do
	}
	
	public function releaseUserQuestionResultUpdateLock()
	{
		// overwrite method in concrete locker if something to do
	}

	public function requestUserPassResultUpdateLock()
	{
		// overwrite method in concrete locker if something to do
	}
	
	public function releaseUserPassResultUpdateLock()
	{
		// overwrite method in concrete locker if something to do
	}

	public function requestUserTestResultUpdateLock()
	{
		// overwrite method in concrete locker if something to do
	}
	
	public function releaseUserTestResultUpdateLock()
	{
		// overwrite method in concrete locker if something to do
	}
}
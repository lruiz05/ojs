<?php

/**
 * @file tests/data/10-InstallationTest.inc.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2000-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class InstallationTest
 * @ingroup tests_data
 *
 * @brief Data build suite: Install the system.
 */

import('lib.pkp.tests.data.PKPInstallationTest');

class InstallationTest extends PKPInstallationTest {
	/**
	 * Get a piece of text by which to recognize the installation form.
	 * @return string
	 */
	protected function _getInstallerText() {
		return 'OJS Installation';
	}
}

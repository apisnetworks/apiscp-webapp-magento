<?php
	/**
 * Copyright (C) Apis Networks, Inc - All Rights Reserved.
 *
 * Unauthorized copying of this file, via any medium, is
 * strictly prohibited without consent. Any dissemination of
 * material herein is prohibited.
 *
 * For licensing inquiries email <licensing@apisnetworks.com>
 *
 * Written by Matt Saladna <matt@apisnetworks.com>, August 2020
 */

	namespace Module\Support\Webapps\App\Type\Magento;

	use Module\Support\Webapps\App\Type\Unknown\Handler as Unknown;

	class Handler extends Unknown
	{
		const NAME = 'Magento';
		const ADMIN_PATH = '/admin';
		const LINK = 'https://magento.com';

		const FEAT_ALLOW_SSL = true;
		const FEAT_RECOVERY = false;

		public function install(): bool
		{
			if (is_debug()) {
				$this->setOption('version', '2.0');
			}

			return parent::install();
		}
	}
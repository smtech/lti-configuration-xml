<?php

namespace smtech\LTI\Configuration;

use MyCLabs\Enum\Enum;

/**
 * An enumerated type of possible privacy levels that Tool Consumers can use
 * for sharing information to Tool Providers.
 *
 * @author Seth Battis <SethBattis@stmarksschool.org>
 * @version v1.0
 */
class LaunchPrivacy extends Enum {
    const USER_PROFILE = 'public';
    const NAME_ONLY = 'name_only';
    const EMAIL_ONLY = 'email_only';
    const ANONYMOUS = 'anonymous';
}

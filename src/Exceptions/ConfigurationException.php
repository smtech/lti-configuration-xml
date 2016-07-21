<?php

namespace smtech\LTI\Configuration\Exception;

use Exception;

/**
 * An exception related to the configuration being built
 *
 * @author Seth Battis <SethBattis@stmarksschool.org>
 * @version v1.0
 */
class ConfigurationException extends Exception {
    const TOOL_PROVIDER = 1;
}

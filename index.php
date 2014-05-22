<?php

/**
 * @defgroup plugins_blocks_linkSubmiting
 */
 
/**
 * @file plugins/blocks/linkSubmitting/index.php
 *
 * Copyright (c) 2003-2009 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * With contributions from:
 * 	- 2014 Instituto Nacional de Investigacion y Tecnologia Agraria y Alimentaria
 *
 * @ingroup plugins_blocks_linkSubmiting
 * @brief Wrapper for "link submiting" block plugin.
 *
 */

// $Id: index.php,v 1.6 2009/04/08 19:54:34 asmecher Exp $


require_once('linkSubmittingBlockPlugin.inc.php');

return new linkSubmittingBlockPlugin();

?> 

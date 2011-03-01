<?php

/*
 * This file is part of the LiveTest package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LiveTest\Event;

use LiveTest\Config\ConfigConfig;

use Annovent\Event\Dispatcher as AnnoventDispatcher;

/**
 * This dispatcher is a standard Annovent dispatcher with the possibility to register
 * listeners using a ConfigConfig object.
 *
 * @author Nils Langner
 */
class Dispatcher extends AnnoventDispatcher
{
  /**
   * This function is used to register listeners using a global configuration file
   *
   * @param ConfigConfig $config
   * @param string $runId
   */
  public function registerListenersByConfig(ConfigConfig $config, $runId)
  {
    foreach ( $config->getListeners() as $listener )
    {
      $className = $listener['className'];
      $listenerObject = new $className($runId, $this);
      \LiveTest\initializeObject($listenerObject, $listener['parameters']);
      $this->registerListener($listenerObject);
    }
  }
}
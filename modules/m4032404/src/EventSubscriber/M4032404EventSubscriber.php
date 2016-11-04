<?php

/**
 * @file
 * Contains \Drupal\m4032404\EventSubscriber.
 */

namespace Drupal\m4032404\EventSubscriber;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Routing\AdminContext;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Provides a subscriber to set the properly exception.
 */
class M4032404EventSubscriber implements EventSubscriberInterface {

  /**
   * The settings config.
   *
   * @var \Drupal\Core\Config\Config
   */
  protected $config;

  /**
   * The admin context.
   *
   * @var \Drupal\Core\Routing\AdminContext
   */
  protected $adminContext;

  /**
   * m4032404EventSubscriber constructor.
   *
   * @param ConfigFactoryInterface $config_factory
   *   The settings config.
   * @param \Drupal\Core\Routing\AdminContext $admin_context
   *   The admin context.
   */
  public function __construct(ConfigFactoryInterface $config_factory, AdminContext $admin_context) {
    $this->config = $config_factory->get('m4032404.settings');
    $this->adminContext = $admin_context;
  }

  /**
   * Set the properly exception for event.
   *
   * @param \Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent $event
   *   The response for exception event.
   */
  public function onAccessDeniedException(GetResponseForExceptionEvent $event) {
    if ($event->getException() instanceof AccessDeniedHttpException) {
      $admin_only = $this->config->get('admin_only');
      $is_admin = $this->adminContext->isAdminRoute();

      if (!$admin_only || $is_admin) {
        $event->setException(new NotFoundHttpException());
      }
    }
  }

  /**
   * Registers the methods in this class that should be listeners.
   *
   * @return array
   *   An array of event listener definitions.
   */
  public static function getSubscribedEvents() {
    $events[KernelEvents::EXCEPTION][] = array('onAccessDeniedException', 50);
    return $events;
  }
}

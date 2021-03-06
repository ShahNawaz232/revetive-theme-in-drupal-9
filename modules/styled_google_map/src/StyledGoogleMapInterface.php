<?php

namespace Drupal\styled_google_map;

/**
 * Interface StyledGoogleMapInterface.
 *
 * @package Drupal\styled_google_map
 */
interface StyledGoogleMapInterface {

  // List of the constants that are used as default map settings.
  const STYLED_GOOGLE_MAP_DEFAULT_WIDTH = '450px';
  const STYLED_GOOGLE_MAP_DEFAULT_HEIGHT = '400px';
  const STYLED_GOOGLE_MAP_DEFAULT_STYLE = '[]';
  const STYLED_GOOGLE_MAP_DEFAULT_GESTURE = 'cooperative';
  const STYLED_GOOGLE_MAP_DEFAULT_ZOOM = 15;
  const STYLED_GOOGLE_MAP_DEFAULT_MAX_ZOOM = 17;
  const STYLED_GOOGLE_MAP_DEFAULT_MIN_ZOOM = 5;
  const STYLED_GOOGLE_MAP_DEFAULT_PIN = 'module://styled_google_map/pin.png';
  const STYLED_GOOGLE_MAP_DEFAULT_MAP_TYPE = 'ROADMAP';
  const STYLED_GOOGLE_MAP_DEFAULT_LABEL = FALSE;
  const STYLED_GOOGLE_MAP_DEFAULT_MAP_TYPE_CONTROL = TRUE;
  const STYLED_GOOGLE_MAP_DEFAULT_SCALE_CONTROL = TRUE;
  const STYLED_GOOGLE_MAP_DEFAULT_ROTATE_CONTROL = TRUE;
  const STYLED_GOOGLE_MAP_DEFAULT_DRAGGABLE = TRUE;
  const STYLED_GOOGLE_MAP_DEFAULT_MOBILE_DRAGGABLE = TRUE;
  const STYLED_GOOGLE_MAP_DEFAULT_ZOOM_CONTROL = TRUE;
  const STYLED_GOOGLE_MAP_DEFAULT_FULLSCREEN = FALSE;
  const STYLED_GOOGLE_MAP_DEFAULT_STREET_VIEW_CONTROL = TRUE;

  // Default settings for pop-up.
  const STYLED_GOOGLE_MAP_DEFAULT_SHADOW_STYLE = 0;
  const STYLED_GOOGLE_MAP_DEFAULT_PADDING = 13;
  const STYLED_GOOGLE_MAP_DEFAULT_BORDER_RADIUS = 7;
  const STYLED_GOOGLE_MAP_DEFAULT_BORDER_WIDTH = 1;
  const STYLED_GOOGLE_MAP_DEFAULT_BORDER_COLOR = '#cccccc';
  const STYLED_GOOGLE_MAP_DEFAULT_BACKGROUND_COLOR = '#ffffff';
  const STYLED_GOOGLE_MAP_DEFAULT_MIN_WIDTH = 'auto';
  const STYLED_GOOGLE_MAP_DEFAULT_MAX_WIDTH = 'auto';
  const STYLED_GOOGLE_MAP_DEFAULT_MIN_HEIGHT = 'auto';
  const STYLED_GOOGLE_MAP_DEFAULT_MAX_HEIGHT = 'auto';
  const STYLED_GOOGLE_MAP_DEFAULT_OPEN_EVENT = 'click';
  const STYLED_GOOGLE_MAP_DEFAULT_AUTO_CLOSE = TRUE;
  const STYLED_GOOGLE_MAP_DEFAULT_ARROW_SIZE = 10;
  const STYLED_GOOGLE_MAP_DEFAULT_ARROW_POSITION = 50;
  const STYLED_GOOGLE_MAP_DEFAULT_ARROW_STYLE = 0;
  const STYLED_GOOGLE_MAP_DEFAULT_DISABLE_AUTO_PAN = 0;
  const STYLED_GOOGLE_MAP_DEFAULT_HIDE_CLOSE_BUTTON = 0;
  const STYLED_GOOGLE_MAP_DEFAULT_DISABLE_ANIMATION = 1;
  const STYLED_GOOGLE_MAP_DEFAULT_BACKGROUND_CLASS = 'sgmpopup-content';
  const STYLED_GOOGLE_MAP_DEFAULT_CONTENT_CONTAINER_CLASS = 'sgmpopup-content-wrapper';
  const STYLED_GOOGLE_MAP_DEFAULT_ARROW_CLASS = 'sgmpopup-arrow';
  const STYLED_GOOGLE_MAP_DEFAULT_ARROW_OUTER_CLASS = 'sgmpopup-arrow-outer';
  const STYLED_GOOGLE_MAP_DEFAULT_ARROW_INNER_CLASS = 'sgmpopup-arrow-inner';

  // Default settings for cluster plugin.
  const STYLED_GOOGLE_MAP_DEFAULT_CLUSTER_TEXT_COLOR = '#ffffff';
  const STYLED_GOOGLE_MAP_DEFAULT_CLUSTER_HEIGHT = 72;
  const STYLED_GOOGLE_MAP_DEFAULT_CLUSTER_WIDTH = 72;
  const STYLED_GOOGLE_MAP_DEFAULT_CLUSTER_TEXT_SIZE = 18;
  const STYLED_GOOGLE_MAP_DEFAULT_CLUSTER_MIN_SIZE = 2;

  // Default settings for Spiderfier plugin.
  const STYLED_GOOGLE_MAP_DEFAULT_SPIDERFIER_MARKERS_WONT_MOVE = FALSE;
  const STYLED_GOOGLE_MAP_DEFAULT_SPIDERFIER_MARKERS_WONT_HIDE = FALSE;
  const STYLED_GOOGLE_MAP_DEFAULT_SPIDERFIER_BASIC_FORMAT_EVENTS = TRUE;
  const STYLED_GOOGLE_MAP_DEFAULT_SPIDERFIER_KEEP_SPIDERFIED = FALSE;
  const STYLED_GOOGLE_MAP_DEFAULT_SPIDERFIER_NEARBY_DISTANCE = 20;
  const STYLED_GOOGLE_MAP_DEFAULT_SPIDERFIER_CIRCLE_SPIRAL_SWITCHOVER = 9;
  const STYLED_GOOGLE_MAP_DEFAULT_SPIDERFIER_HEIGHT = 65;
  const STYLED_GOOGLE_MAP_DEFAULT_SPIDERFIER_WIDTH = 55;
  const STYLED_GOOGLE_MAP_DEFAULT_SPIDERFIER_LEG_WEIGHT = 1.5;
  const STYLED_GOOGLE_MAP_DEFAULT_SPIDERFIER_CIRCLE_FOOT_SAPARATION = 50;
  const STYLED_GOOGLE_MAP_DEFAULT_SPIDERFIER_SPIRAL_FOOT_SAPARATION = 55;

  // Default settings for heatmap plugin.
  const STYLED_GOOGLE_MAP_DEFAULT_HEATMAP_ENABLED = FALSE;
  const STYLED_GOOGLE_MAP_DEFAULT_HEATMAP_DISSIPATING = FALSE;
  const STYLED_GOOGLE_MAP_DEFAULT_HEATMAP_GRADIENT = '';
  const STYLED_GOOGLE_MAP_DEFAULT_HEATMAP_MAX_INTENSITY = 100;
  const STYLED_GOOGLE_MAP_DEFAULT_HEATMAP_OPACITY = 0.6;
  const STYLED_GOOGLE_MAP_DEFAULT_HEATMAP_RADIUS = 10;

  // Enumerate options for type of API authentication.
  const STYLED_GOOGLE_MAP_GOOGLE_AUTH_KEY = 1;
  const STYLED_GOOGLE_MAP_GOOGLE_AUTH_WORK = 2;

  // Directions settings.
  const STYLED_GOOGLE_MAP_DEFAULT_DIRECTIONS = FALSE;
  const STYLED_GOOGLE_MAP_DEFAULT_DIRECTIONS_SHOW_STEPS = FALSE;
  const STYLED_GOOGLE_MAP_DEFAULT_DIRECTIONS_TYPE = 'SELECTABLE';

}

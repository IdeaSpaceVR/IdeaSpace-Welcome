<?php

return [

  '#theme-name' => 'IdeaSpace Welcome!',
  '#theme-key' => 'ideaspace-welcome',
  '#theme-version' => '1.0',
  '#ideaspace-version' => '>=1.1.1',
  '#theme-description' => 'A theme to create an entrance environment with links to other spaces.',
  '#theme-author-name' => 'IdeaSpaceVR',
  '#theme-author-email' => 'info@ideaspacevr.org',
  '#theme-homepage' => 'https://www.ideaspacevr.org/themes',
  '#theme-keywords' => 'entrance, overview',
  '#theme-view' => 'scene',

  '#content-types' => [

    'general-settings' => [
      '#label' => 'General Settings',
      '#description' => 'Configure your theme.',
      '#max-values' => 1,
      '#fields' => [

				'logo' => [
          '#label' => 'Logo',
          '#description' => 'Upload an image.',
          '#help' => 'Upload an image.',
          '#type' => 'image',
          '#required' => false,
					'#content-preview-image' => true,
          '#file-extension' => ['jpg', 'png'],
        ],

				'logo-aspect-ratio' => [
          '#label' => 'Logo Aspect Ratio',
          '#description' => 'If your image appears distorted, try changing the aspect ratio.',
          '#help' => 'If your image appears distorted, try changing the aspect ratio.',
          '#type' => 'options-select',
          '#options' => ['4-3' => '4 : 3', '3-4' => '3 : 4', '16-9' => '16 : 9', '9-16' => '9 : 16', '1-1' => '1 : 1'],
          '#required' => true,
        ],

        'space-title-color' => [
          '#label' => 'Space Title Color',
          '#description' => 'Select a text color.',
          '#help' => 'Select a text color.',
          '#type' => 'color',
					'#default_value' => '#FFFFFF',
          '#required' => false,
        ],

				'environment' => [
          '#label' => 'Environment',
          '#description' => 'Select an environment.',
          '#help' => 'Select an environment.',
          '#type' => 'options-select',
          '#required' => true,
          '#options' => ['gradient' => 'Gradient', 'north-american-nature' => 'North American Nature'],
          '#default_value' => 'north-american-nature',
        ],

      ],

    ],


    'space-links' => [
      '#label' => 'Space Links',
      '#description' => 'Manage your space links.',
      '#max-values' => 36,
      '#fields' => [

        'space-link-title' => [
          '#label' => 'Space Link Title',
          '#description' => 'Enter a short space link title',
          '#help' => 'The title is shown in front of the space link image.',
          '#type' => 'textfield',
					'#contentformat' => 'html/text',
					'#maxlength' => 1000,
          '#required' => true,
        ],

        'space-link-image' => [
          '#label' => 'Space Link Image',
          '#description' => 'Uploaded images are resized to 512 x 256 pixel.',
          '#help' => 'Uploaded images are resized to 512 x 256 pixel.',
          '#type' => 'image',
					'#content-preview-image' => true,
          '#file-extension' => ['jpg', 'png', 'gif'],
          '#required' => false,
        ],

        'space-link-reference' => [
          '#label' => 'Space Link',
          '#description' => 'Select a space to link to.',
          '#help' => 'Select a space to link to.',
          '#type' => 'space-reference',
          '#required' => true,
          '#published' => true,
        ],

        'space-link-background-color' => [
          '#label' => 'Space Link Background Color',
          '#description' => 'Select a background color.',
          '#help' => 'Select a background color.',
          '#type' => 'color',
					'#default_value' => '#FFFFFF',
          '#required' => false,
        ],

      ], /* fields */

    ], /*  */

  ], /* content types */

];



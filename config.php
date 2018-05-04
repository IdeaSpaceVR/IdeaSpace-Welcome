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

    'user-info' => [
      '#label' => 'General Info',
      '#description' => 'Add some general info.',
      '#max-values' => 1,
      '#fields' => [

				'image-vr' => [
          '#label' => 'Logo',
          '#description' => 'Upload an image.',
          '#help' => 'Upload an image.',
          '#type' => 'image',
          '#required' => false,
          '#file-extension' => ['jpg', 'png'],
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
          '#description' => 'Enter a title.',
          '#help' => 'Enter a title.',
          '#type' => 'textfield',
					'#contentformat' => 'html/text',
					'#maxlength' => 300,
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
          '#file-extension' => ['jpg', 'png', 'gif'],
          '#required' => true,
          '#published' => true,
        ],

      ], /* fields */

    ], /*  */

  ], /* content types */

];



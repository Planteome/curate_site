<?php
 
/**
 * Implement hook_rules_action_info().
 */
function planteome_rules_rules_action_info() {
  return array(
    'planteome_rules_rules_action_email_relevant_curators' => array(
      'label' => t('Email Curators of Species'),
      'group' => t('Planteome'),
      'parameter' => array(
        'nid' => array(
          'type' => 'text',
          'label' => t('NID of taxon which is being annotated.'),
          'description' => t('Enter the NID of the taxon which is being annotated.'),
        ),
        'subject' => array(
          'type' => 'text',
          'label' => t('The subject to send to the curator'),
          'description' => t('Enter a subject to be sent to the curator.'),
        ),
        'message' => array(
          'type' => 'text',
          'label' => t('The message to send to the curator'),
          'description' => t('Enter a message to be sent to the curator.'),
        ),
      ),
    ),
    //one of these is unneeded -_-
    'planteome_rules_rules_action_email_relevant_curators' => array(
      'label' => t('Email Curators of Species'),
      'group' => t('Planteome'),
      'parameter' => array(
        'nid' => array(
          'type' => 'text',
          'label' => t('NID of taxon which is being annotated.'),
          'description' => t('Enter the NID of the taxon which is being annotated.'),
        ),
        'subject' => array(
          'type' => 'text',
          'label' => t('The subject to send to the curator'),
          'description' => t('Enter a subject to be sent to the curator.'),
        ),
        'message' => array(
          'type' => 'text',
          'label' => t('The message to send to the curator'),
          'description' => t('Enter a message to be sent to the curator.'),
        ),
      ),
    ),
  );
}
 
// A helper function to provide us with a list of algorithms
// function planteome_rules_algorithm_options() {
//   $algorithms = array();
 
//   $algorithms['md4'] = t('md4');
//   $algorithms['md5'] = t('md5');
 
//   return $algorithms;
// }
 
// This callback creates and sends the email to the relevant curators
function planteome_rules_rules_action_email_relevant_curators($nid, $subject, $message) {
  $users = entity_load('user');

  // build email to send
  $params = [
    'subject' => t($subject),
    'body'    => check_markup(t($message), 'plain_text'),
  ];
  // echo'<pre>';var_dump($users);exit;

  foreach($users as $user){
    if(count($user->field_curation_species) && $user->mail != ''){
      foreach($user->field_curation_species[LANGUAGE_NONE] as $curation_species){
        if($curation_species['target_id'] == $nid){
          // echo'<pre>';var_dump($user);var_dump($curation_species);exit;
          drupal_mail('planteome_rules', 'email_curator', $user->mail, language_default(), $params);
          break;
        }
      }
    }
  }
}

function planteome_rules_mail($key, &$message, $params){
  switch($key){
    case 'email_curator':
      $message['subject'] = $params['subject'];
      $message['body'][] = $params['body'];
      break;
  }
}
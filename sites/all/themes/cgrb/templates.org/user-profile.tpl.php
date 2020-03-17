<?php 
 //echo "<pre>"; print_r($user_profile); exit();
//print render($user_profile); 
global $user;  
// $Publication = 0;
?>
 <div class=" col-md-9 col-lg-9"> 
 	<h2 style="text-align: center;">User Profile</h2>
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Role:</td>
                        <td><?php 
                          foreach($user->roles as $role) {
                            //$text = implode(", ", $user->roles);
                            if($role != 'authenticated user'){
                                print render( $role ); 
                               }   
                             //echo "<pre>"; print_r($role); 
                          } ?>
                         </td>
                      </tr>
                      <tr>
                        <td>Firstname:</td>
                        <td><?php print render($user_profile['field_firstname']['#object']->field_firstname['und'][0]['value']);  ?></td>
                      </tr>
                      <tr>
                        <td>Lastname:</td>
                        <td><?php print render($user_profile['field_firstname']['#object']->field_lastname['und'][0]['value']);  ?></td>
                      </tr>
                      <tr>
                        <td>Affiliation</td>
                        <td><?php print render($user_profile['field_firstname']['#object']->field_affiliation['und'][0]['value']);  ?></td>
                      </tr>
                    </tbody>
                  </table>
                  <h3><?php echo l('Edit Profile', "user/".$user->uid."/edit/", ['attributes' => [
          'class' => [
            'edit-button'
          ]
          ]
        ]
        ); ?></h3>
                 
    </div>
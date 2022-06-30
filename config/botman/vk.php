<?php

return [
    'token' => 'a9b4652c60a7a3fa4e909330d381d6005bfe8a5e213725a2a0d4111c6eb5d5af321821e045527b051906c',                    // User or community token for sending messages (from Access tokens tab, see above)
    'secret' => 'hgHHGG8883333_33jdjdjdnnvhhlqoj',                   // Secret phrase for validating the request sender (from Callback API tab, see above)
    'version' => '5.103',                       // API version to be used for sending an receiving messages (should be 5.103 and higher) (not recommended to change)
    'endpoint' => 'https://api.vk.com/method/', // VK API endpoint (don't change it if unnecessary)
    'confirm' => '',                            // DEPRECATED SINCE v.1.4.2, LEAVE BLANK (EMPTY STRING) - see 'Mounting & confirming the bot' section. Confirmation phrase for VK
    'group_id' => '211814096',                 // Community or group ID
    'user_fields' => ''
];
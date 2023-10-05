<?php

namespace Subscription;

final class UserSubscriptionReminder 
{
    
    private $http_status;
    private $invalid;
    private $validAccess;

    public function calculateSubscriptionStatus($subscriptionDate) {
        // Convert the subscription date string to a DateTime object
        $subscriptionDateTime = new DateTime($subscriptionDate);
        
        // Calculate the expiration date by adding one year to the subscription date
        $expirationDateTime = clone $subscriptionDateTime;
        $expirationDateTime->add(new DateInterval('P1Y'));

        // Add one month of free access
        $expirationDateTime->add(new DateInterval('P1M'));

        // Get the current date and time
        $currentDateTime = new DateTime();

        // Calculate the remaining time until expiration
        $remainingTime = $currentDateTime->diff($expirationDateTime);

        // Format the remaining time for display
        $remainingTimeString = $remainingTime->format('%y years, %m months, %d days, %h hours, %i minutes, %s seconds');

        // Return the subscription status information
        return [
            'subscription_date' => $subscriptionDateTime->format('Y-m-d'),
            'expiration_date' => $expirationDateTime->format('Y-m-d'),
            'remaining_time' => $remainingTimeString
        ];
}
    public function isValidUserTimeAccess(){ 
        $subscriptionDate = ((isset($_SESSION['subscribe_date']) && !empty($_SESSION['subscribe_date'])) ? $_SESSION['subscribe_date'] : ''); // Replace with the user's actual subscription date
        $subscriptionStatus = $this->calculateSubscriptionStatus($subscriptionDate);
        $reponses = [];
        $reponses['Subscription_date']= $subscriptionStatus['subscription_date'];
        $reponses['Expiration_date']= $subscriptionStatus['expiration_date'];
        $reponses['Remaining_Time_Until_Expiration']= $subscriptionStatus['remaining_time'];
        echo json_encode($reponses);
    }

}

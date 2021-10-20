<?php
//calling methods on an object returned by another method
class Tweet
{
    protected array $data;

    public function from(string $from)
    {
        $this->data['from'] = $from;

        return $this;
    }

    public function withStatus(string $status)
    {
        $this->data['status'] = $status;

        return $this;
    }

    public function send()
    {
        //call twitter api to send message
        return "calling twitter api \n";
    }
}

$tweetObj = new Tweet();
echo $tweetObj->from('@abuMarawan')
    ->withStatus('Married')
    ->send();

var_dump($tweetObj);
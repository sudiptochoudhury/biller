<?php

namespace SudiptoChoudhury\Biller\Support\Abstracts\Payments;

abstract class AbstractCard
{

    protected $owner;

    /**
     * @var \SudiptoChoudhury\Biller\Support\Contracts\Payments\CardInterface
     */
    protected $card;

    public function __construct($owner, AbstractCard $card)
    {
        $this->card = $card;
        $this->owner = $owner;
    }

    /**
     * Delete the card.
     *
     * @return \Stripe\Card
     */
    public function delete()
    {
        return $this->card->delete();
    }

    /**
     * Get the Stripe card instance.
     *
     * @return \Stripe\Card
     */
    public function asStripeCard()
    {
        return $this->card;
    }

    /**
     * Dynamically get values from the Stripe card.
     *
     * @param  string  $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->card->{$key};
    }

}

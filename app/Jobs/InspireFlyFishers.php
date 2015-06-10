<?php namespace Hatches\Jobs;

use Illuminate\Support\Collection;

class InspireFlyFishers
{
    /**
     * Get an inspiring quote.
     *
     * Taylor & Dayle made this commit from Jungfraujoch. (11,333 ft.)
     * Jeremy Anderson shamelessly uses it to geek-out fly fishers.
     * - Much love, guys.
     *
     * @return string
     */
    public static function quote()
    {
        return Collection::make([
            "I am not against golf, since I cannot but suspect it keeps armies of the unworthy from discovering trout.
~ Paul O'Neil",
            "The difference between fly fishers and worm dunkers is the quality of their excuses.
~ Anonymous",
            'If fishing is like religion, then fly-fishing is high church.
~ Tom Brokaw',
            'Creeps and idiots cannot conceal themselves for long on a fishing trip.
~ John Gierach',
            "If people concentrated on the really important things of life, there'd be a shortage of fishing poles.
~ Doug Larson",
            "If fishing is interfering with your business, give up your business.
~ Alfred W. Miller",
            "All Americans believe that they are born fishermen. For a man to admit a distaste for fishing would be like denouncing mother-love or hating moonlight.
~ John Steinbeck"
        ])->random();
    }

}

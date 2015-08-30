<?php namespace Illuminate\Foundation;

use Illuminate\Support\Collection;

class Inspiring {

	/**
	 * Get an inspiring quote.
	 *
	 * Taylor & Dayle made this commit from Jungfraujoch. (11,333 ft.)
	 *
	 * @return string
	 */
	public static function quote()
	{
		return Collection::make([

			'When there is no desire, all things are at peace. - Laozi',
			'Simplicity is the ultimate sophistication. - Leonardo da Vinci',
			'Simplicity is the essence of happiness. - Cedric Bledsoe',
			'Smile, breathe, and go slowly. - Thich Nhat Hanh',
			'Simplicity is an acquired taste. - Katharine Gerould',
			'Start by doing what\'s necessary, then do what\'s possible, and suddenly you are doing the impossible. - Francis of Assisi',
			'The trouble is you think you have time. -Buddha',
			'Life is a shipwreck, but we must not forget to sing in the lifeboats. -Voltaire',
			'Whatever you are, be a good one. -Abraham Lincoln',
			'Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment. -Buddha',
			'Sir Jhukao Aur kaam karo - GandhiJi',
			'Youth is counted sweetest by those who are no longer young. -John Green',
			'What a wonderful life I’ve had! I only wish I’d realized it sooner. -Colette',
			'Love the life you live, and live the life you love. -Bob Marley',
			'It has been my philosophy of life that difficulties vanish when faced boldly. -Isaac Asimov',
			'A man is not old until his regrets take the place of his dreams. -John Barrymore',
			'Try and fail, but never fail to try. -Jared Leto',
			'To succeed in life, you need two things: ignorance and confidence. -Mark Twain',

		])->random();
	}

}

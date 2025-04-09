<?php
class ComicService {
	public function loadChapter($plot_code, $chapter) {
		$chapters = json_decode(file_get_contents($plot_code . '.json'), true);
		return $chapters[$chapter - 1];
	}
}
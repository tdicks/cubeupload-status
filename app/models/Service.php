<?php

	class Service extends Eloquent
	{

		public function issues()
		{
			return $this->belongsToMany('Issue');
		}
		
		public function issuesConfirmed()
		{
			$issues = $this->issues()->whereConfirmed(true)->whereActive(true)->get();
			if( count( $issues ) > 0 )
				return true;
			else
				return false;
		}
		
		public function issuesUnconfirmed()
		{
			$issues = $this->issues()->whereConfirmed(false)->whereActive(true)->get();
			if( count( $issues ) > 0 )
				return true;
			else
				return false;
		}

	}

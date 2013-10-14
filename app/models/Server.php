<?php

	class Server extends Eloquent
	{
		private $currentStatus;
		
		public function services()
		{
			return $this->hasMany('Service');
		}
		
		public function serviceStatus()
		{
			if( $this->currentStatus == null )
			{
				$status = 'OK';
				
				foreach( $this->services()->get() as $service )
				{
					foreach( $service->issues()->whereActive( true )->get() as $issue )
					{
						if( $issue->confirmed )
						{
							$status = 'ConfirmedIssue';
						}
						else
						{
							$status = 'UnconfirmedIssue';
						}
					}
				}
				$this->currentStatus = $status;
				return $status;
			}
			else
			{
				return $this->currentStatus;
			}
		}
		
	}
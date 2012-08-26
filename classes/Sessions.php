<?php
	/*
	# Copyright 2012 NodeSocket, LLC
	#
	# Licensed under the Apache License, Version 2.0 (the "License");
	# you may not use this file except in compliance with the License.
	# You may obtain a copy of the License at
	#
	# http://www.apache.org/licenses/LICENSE-2.0
	#
	# Unless required by applicable law or agreed to in writing, software
	# distributed under the License is distributed on an "AS IS" BASIS,
	# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	# See the License for the specific language governing permissions and
	# limitations under the License.
	*/
	
	class Sessions {
		public static function init($ini_tweaks = true) {
			////
			// Execute ini tweaks for sessions
			////
			if($ini_tweaks) {
				ini_set('session.cookie_lifetime', 0);
				ini_set('session.gc_probability', 1);
				ini_set('session.gc_divisor', 100);
				
				////
				// Use SHA-1
				////
				ini_set('hash_function', 1);
				
				////
				// 1 Hour
				////
				ini_set('session.gc_maxlifetime', 3600);
			}
			
			session_start();
		}	
	}
	
	Sessions::init();
?>
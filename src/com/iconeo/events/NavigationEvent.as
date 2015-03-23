package com.iconeo.events
{
	import flash.events.Event;

	public class NavigationEvent extends Event
	{
		public static const CHANGER_PAGE:String = "changerPage";
		
		public var nouvellePage:String;
		
		public function NavigationEvent(type:String, bubbles:Boolean=false, cancelable:Boolean=false)
		{
			super(type, bubbles, cancelable);
		}
		
		override public function clone():Event{
			var clone:NavigationEvent = new NavigationEvent(type, bubbles, cancelable);
			clone.nouvellePage = this.nouvellePage;
			return clone;
		}
		
		
	}
}
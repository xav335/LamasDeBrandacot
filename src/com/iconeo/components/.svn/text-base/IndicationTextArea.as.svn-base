package com.iconeo.components
{
	import flash.events.Event;
	import flash.events.FocusEvent;
	import flash.events.MouseEvent;
	
	import mx.controls.TextArea;

	[Style(name="couleurTexteBis", type="uint", format="Color", inherit="no")]
	[Style(name="couleurFondBis", type="uint", format="Color", inherit="no")]
	[Style(name="couleurBordureBis", type="uint", format="Color", inherit="no")]
	public class IndicationTextArea extends TextArea
	{
		private var _indication:String;
		private var _aucuneSaisie:Boolean = true;
		private var _couleurTexteInitiale:uint;
		private var _couleurFondInitiale:uint;
		private var _couleurBordureInitiale:uint;
		
		public function IndicationTextArea()
		{
			super();
			addEventListener(FocusEvent.FOCUS_IN,
				function():void{
					if(_aucuneSaisie) {
						text='';
					}
					passerCouleursBis();
				});
			addEventListener(FocusEvent.FOCUS_OUT, 
				function():void{
					if(text == '') {
						text = _indication;
						_aucuneSaisie = true;
					} else {
						_aucuneSaisie = false;
					}
					retablirCouleurInitiales();
				});
			addEventListener(Event.CHANGE,
				function():void{
					if(text == '') {
						_aucuneSaisie = true;
					} else {
						_aucuneSaisie = false;
					}
				});
			
			addEventListener(MouseEvent.ROLL_OVER, passerCouleursBis);
			addEventListener(MouseEvent.ROLL_OUT, retablirCouleurInitiales);
		}
		
		override public function stylesInitialized():void {
			super.stylesInitialized()
			
			_couleurFondInitiale = getStyle("backgroundColor");
			_couleurTexteInitiale = getStyle("color");
			_couleurBordureInitiale = getStyle("borderColor");
		}
		
		public function set indication(value:String):void {
			_indication = value;
			if(_aucuneSaisie){
				text = _indication;
			}
		}
		
		public function set saisieOn(value:Boolean){
			_aucuneSaisie = !value;
		}
	
		private function passerCouleursBis(e:Event = null):void {
			setStyle("backgroundColor", getStyle("couleurFondBis"));
			setStyle("color", getStyle("couleurTexteBis"));
			setStyle("borderColor", getStyle("couleurBordureBis"));
		} 

		private function retablirCouleurInitiales(e:Event = null):void {
			if(focusManager.getFocus() != this){
				setStyle("backgroundColor", _couleurFondInitiale);
				setStyle("color", _couleurTexteInitiale);
				setStyle("borderColor", _couleurBordureInitiale);
			}
		}
		
		public function get texteSaisi():String{
			if(_aucuneSaisie){
				return "";
			} else {
				return text;
			}
		}
	}
}
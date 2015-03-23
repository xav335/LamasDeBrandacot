package com.iconeo.tools
{
	import flash.events.MouseEvent;
	import flash.events.ProgressEvent;
	
	import mx.containers.Box;
	import mx.containers.Canvas;
	import mx.containers.HBox;
	import mx.containers.Panel;
	import mx.containers.VBox;
	import mx.controls.Image;
	import mx.controls.ProgressBar;
	import mx.effects.AnimateProperty;
	
	[Style(name="epaisseur", type="Number", 
		format="Length", inherit="no")]
	public class SmoothImageCanvas extends Canvas
	{
		public var image:SmoothImage;
		private var _urlMedia:String;
		private var progressBar:ProgressBar;
		private var box:Box;
		private var panel:Panel;
		private var aller:AnimateProperty;
		private var retour:AnimateProperty;
		
		private var modeFullScreenEnclanche:Boolean = false;
		
		public function SmoothImageCanvas(){
			verticalScrollPolicy = "off";
			horizontalScrollPolicy = "off";

			image = new SmoothImage();
			image.addEventListener(ProgressEvent.PROGRESS, handleProgress);
			image.maintainAspectRatio = false;
			addChild(image);
			
			box = new Box();
			box.visible = false;
			box.x = 0;
			box.y = 0;
			box.percentHeight = 100;
			box.percentWidth = 100;
			box.setStyle("horizontalAlign", "center");
			box.setStyle("verticalAlign", "middle");
			addChild(box);
			
			progressBar = new ProgressBar();
			progressBar.label = "";
			progressBar.labelPlacement="right";
			progressBar.setStyle("labelWidth", "0");
			progressBar.setStyle("horizontalGap", "0");
			progressBar.mode = "manual";
			box.addChild(progressBar);
			
		}
		
		public function set source(value:String):void {
			image.source = value;
		}
		
		public function set urlMediaFullScreen(value:String):void {
			_urlMedia = value;

			if(!modeFullScreenEnclanche){
				modeFullScreenEnclanche = true;
				panel = new Panel();
				panel.title = "Agrandir";
				panel.width = 80;
				panel.height = 30;
				panel.setStyle("bottom", -30);
				panel.setStyle("left", 10);
				panel.styleName = "panelNoir";
				addChild(panel);
				aller = new AnimateProperty(panel);
				aller.isStyle = true;
				aller.property = "bottom";
				aller.toValue = 0;
				aller.duration = 200;
				retour = new AnimateProperty(panel);
				retour.isStyle = true;
				retour.property = "bottom";
				retour.toValue = -30;
				retour.duration = 200;
		
				addEventListener(MouseEvent.ROLL_OVER, handleRollOver);
				addEventListener(MouseEvent.ROLL_OUT, handleRollOut);
				
				useHandCursor = true;
				buttonMode = true;
				mouseChildren = false;
				addEventListener(MouseEvent.CLICK, handleClick);
			}
			
			var patternFlv:String = ".*\.flv$"
			if(_urlMedia.match(patternFlv) != null){
				panel.title = "Lire la vidéo";
				panel.width = 110;
				var hbox:HBox = new HBox();
				hbox.percentHeight = 100;
				hbox.percentWidth = 100;
				hbox.setStyle("verticalAlign", "middle");
				var vbox:VBox = new VBox();
				vbox.percentWidth = 100;
				vbox.setStyle("horizontalAlign", "center");
				
				var play:Image = new Image();
				play.source = "../assets/btn_play.png";
				
				vbox.addChild(play);
				hbox.addChild(vbox);
				addChild(hbox);
			}

		}
		
        // overriding the update function
        override protected function updateDisplayList(w:Number,h:Number):void
        {
            super.updateDisplayList(w,h);

            var thickness:Number = getStyle('epaisseur');
            
            image.x = thickness;
            image.y = thickness;
            
            image.width = this.width-2*thickness;
            image.height = this.height-2*thickness;
            
        }
        
		private function handleClick(e:MouseEvent=null):void{
			if(_urlMedia != null) {
				VisuMediaSingleton.instance.urlMedia = _urlMedia;
				VisuMediaSingleton.instance.afficherMedia();
				VisuMediaSingleton.instance.visible = true;
			}
		}

		private function handleProgress(e:ProgressEvent=null):void{
			if(e.bytesLoaded == e.bytesTotal){
				box.visible = false;
			} else {
				box.visible = true;
				progressBar.setProgress(e.bytesLoaded, e.bytesTotal);
			}
		}
		
		private function handleRollOver(e:MouseEvent=null):void{
			if(retour.isPlaying){
				retour.stop();
			}
			aller.play();
		}
		
		private function handleRollOut(e:MouseEvent=null):void{
			if(aller.isPlaying){
				aller.stop();
			}
			retour.play();
		}
		
	}
}
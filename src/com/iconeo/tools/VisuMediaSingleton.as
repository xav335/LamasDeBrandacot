package com.iconeo.tools
{
	import com.fxcomponents.controls.FXVideo;
	
	import flash.events.Event;
	import flash.events.MouseEvent;
	import flash.events.ProgressEvent;
	
	import mx.containers.Box;
	import mx.containers.Canvas;
	import mx.controls.ProgressBar;
	import mx.controls.Text;
	import mx.events.MetadataEvent;
					
	public class VisuMediaSingleton extends Canvas
	{
		private var imageZoomee:SmoothImage;
		private var videoZoomee:FXVideo;
		public var urlMedia:String;

		public var indication:Text = new Text();

		private static var _instance:VisuMediaSingleton;
		
		private var progressBar:ProgressBar;
		private var box:Box;
		private var prochainClickAnnule:Boolean = false;

		public function VisuMediaSingleton()
		{
			super();
			horizontalScrollPolicy = "off";
			verticalScrollPolicy = "off";

			setStyle("backgroundColor","#000000");
			setStyle("backgroundAlpha","0.8");
			setStyle("width","100%");
			setStyle("height","100%");
			setStyle("x","0");
			setStyle("y","0");
			
			this.addEventListener(MouseEvent.CLICK, disparaitre);
			
			indication.styleName = "texteMenuSelec";
			indication.text = "Cliquez pour revenir au site"
			indication.enabled = false;
			
			box = new Box();
			box.visible = false;
			box.x = 0;
			box.y = 0;
			box.percentHeight = 100;
			box.percentWidth = 100;
			box.setStyle("horizontalAlign", "center");
			box.setStyle("verticalAlign", "middle");
			
			progressBar = new ProgressBar();
			progressBar.label = "";
			progressBar.labelPlacement="right";
			progressBar.setStyle("labelWidth", "0");
			progressBar.setStyle("horizontalGap", "0");
			progressBar.mode = "manual";
			box.addChild(progressBar);
		}

		public static function get instance():VisuMediaSingleton{
			if(_instance == null){
				_instance = new VisuMediaSingleton();
			}
			return _instance;
		}
		
		public function afficherMedia():void{
			_instance.visible = true;
			
			var patternFlv:String = ".*\.flv$"
			
			//Si ce media n'est pas un flv, c'est une image
			if(urlMedia.match(patternFlv) == null){
				imageZoomee = new SmoothImage();
				imageZoomee.addEventListener(ProgressEvent.PROGRESS, handleProgressChargementImage);
				imageZoomee.addEventListener(Event.INIT, chargementImageComplet);
				imageZoomee.load(urlMedia);
				addChild(box);
			} else {
				videoZoomee = new FXVideo();
				videoZoomee.addEventListener(MetadataEvent.METADATA_RECEIVED, chargementVideoComplet);
				videoZoomee.addEventListener(MouseEvent.CLICK, test);

				
				videoZoomee.source = urlMedia;
				addChild(videoZoomee);
				
				indication.x = (this.width-300)/2;
				indication.setStyle("bottom", 0);
				addChild(indication);
			}
		}
		
		private function chargementImageComplet(e:Event):void {
			imageZoomee.maintainAspectRatio = true;

			var hauteurDispo:int = this.height-indication.height;
			
			var hauteurImageFinale:int = imageZoomee.contentHeight;
			var largeurImageFinale:int = imageZoomee.contentWidth;
			
			if((imageZoomee.contentHeight/hauteurDispo) > (imageZoomee.contentWidth/this.width)){
				if(imageZoomee.contentHeight>hauteurDispo){
					imageZoomee.height = hauteurDispo;
					hauteurImageFinale = hauteurDispo;
					largeurImageFinale /= (imageZoomee.contentHeight/hauteurDispo);
				}
			} else {
				if(imageZoomee.contentWidth>this.width){
					imageZoomee.width = this.width;
					hauteurImageFinale /= (imageZoomee.contentWidth/this.width);
					largeurImageFinale = this.width;
				}
			}
			
			
			imageZoomee.x = (this.width-largeurImageFinale)/2;
			imageZoomee.y = (hauteurDispo-hauteurImageFinale)/2;
			addChild(imageZoomee);
			
			indication.x = (this.width-300)/2;
			indication.setStyle("bottom", 0);
			addChild(indication);
		}
		
		private function handleProgressChargementImage(e:ProgressEvent=null):void{
			if(e.bytesLoaded == e.bytesTotal){
				box.visible = false;
			} else {
				box.visible = true;
				progressBar.setProgress(e.bytesLoaded, e.bytesTotal);
			}
		}
		
		private function chargementVideoComplet(e:Event):void {
			videoZoomee.x = (width-videoZoomee.videoWidth)/2;
			videoZoomee.y = (height-videoZoomee.videoHeight)/2;
			
			trace("********************************************************");
			trace("********************************************************");
			trace("********************************************************");
			trace("videoZoomee.x = (cache.width-videoZoomee.videoWidth)/2");
			trace("videoZoomee.x = " + width + "-" + videoZoomee.videoWidth + "/2 = " + videoZoomee.x);
			trace("videoZoomee.y = (cache.height-videoZoomee.videoHeight)/2");
			trace("videoZoomee.y = " + height + "-" + videoZoomee.videoHeight + "/2 = " + videoZoomee.y);
			trace("********************************************************");
			trace("********************************************************");
			trace("********************************************************");
			
			videoZoomee.play();
		}

		private function test(e:MouseEvent=null):void{
			prochainClickAnnule = true;
		}
		
		private function disparaitre(e:MouseEvent=null):void{
			if(!prochainClickAnnule){
				visible=false;
				if(videoZoomee != null){
					videoZoomee.stop();
				}
				removeAllChildren()
			}
			prochainClickAnnule = false;
		}

	}
}
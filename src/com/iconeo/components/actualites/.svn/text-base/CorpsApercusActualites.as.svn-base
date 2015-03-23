package com.iconeo.components.actualites
{
	import com.iconeo.data.ActuData;
	import com.iconeo.data.MediaData;
	import com.iconeo.events.NavigationEvent;
	
	import mx.collections.ArrayCollection;
	import mx.containers.Canvas;
	import mx.controls.TileList;
	import mx.controls.listClasses.TileBaseDirection;
	import mx.core.ClassFactory;
	import mx.core.ScrollPolicy;
	import mx.events.ListEvent;
	import mx.rpc.events.ResultEvent;
	import mx.rpc.http.mxml.HTTPService;
	
	[Event(name="changerPage", type="com.iconeo.events.NavigationEvent")]
	public class CorpsApercusActualites extends Canvas
	{
		
		private var actuXML:XML;
		private var liste:TileList;
		private var _urlFlux:String;
		
		public function CorpsApercusActualites()
		{
			super();
			
			setStyle("backgroundAlpha", "0");
			
			liste = new TileList();
			liste.setStyle("backgroundAlpha", "0");
			liste.setStyle("borderStyle", "none");
			liste.itemRenderer = new ClassFactory(ActuRenderer);
			liste.selectable = false;
			liste.percentWidth = 100;
			liste.percentHeight = 100;
			liste.addEventListener(ListEvent.ITEM_CLICK, afficherActualite);
			
			liste.direction = TileBaseDirection.HORIZONTAL;
			liste.verticalScrollPolicy = ScrollPolicy.AUTO;
			liste.horizontalScrollPolicy = ScrollPolicy.OFF;
			liste.maxColumns = 1;
			addChild(liste);
		}
		
		public function activer():void{
		}
		
		private function afficherActualite(e:ListEvent):void{
			GrosPlanActualite.donnees = e.itemRenderer.data as ActuData;
			var event:NavigationEvent = new NavigationEvent(NavigationEvent.CHANGER_PAGE);
			event.nouvellePage = "actualite";
			dispatchEvent(event);
		}

		
		public function set urlFlux(urlFlux:String):void{
			var httpService:HTTPService = new HTTPService();
			_urlFlux = urlFlux;
			httpService.url = urlFlux;
			httpService.resultFormat = "e4x";
			httpService.addEventListener(ResultEvent.RESULT, onRecupXml);
			httpService.send();
		}
		
		private function onRecupXml(e:ResultEvent):void {
			actuXML = e.result as XML;
			afficherListe();
		}
		private function afficherListe():void  {
			var collection:ArrayCollection = new ArrayCollection();
			for each (var actu:XML in actuXML.item) {
				var actuData:ActuData = new ActuData();
				actuData.date = actu.date;
				actuData.texte = actu.texte;
				actuData.listeMedia = new Array();
				for each (var media:XML in actu.media) {
					var mediaData:MediaData = new MediaData();
					mediaData.type = media.@type;
					mediaData.urlApercu = media.urlApercu;
					mediaData.urlMedia = media.urlMedia;
					actuData.listeMedia.push(mediaData);
				}

				collection.addItem(actuData);
			}
			liste.dataProvider = collection;
		}
		
	}
}
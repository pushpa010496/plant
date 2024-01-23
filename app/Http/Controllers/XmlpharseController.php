<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use xml;
use News;
use App\Xmlpharse;
use Orchestra\Parser\Xml\Facade as XmlParser;
use File;

class XmlpharseController extends Controller
{
   
   //prnews xml pharsing

	public function prnews(Request $request)
	{


   $file_dir="industry/mediaroom/prnews/";

   $scan_dir = scandir($file_dir);


/* Method 1 */
   foreach ($scan_dir as $key => $value) {
                 
                  if ($key >1) {

                     $path_parts = pathinfo($file_dir.$value);

               

               if(file_get_contents($file_dir.$value)!=''){

                $xmlDoc = new \DOMDocument();

                $data=$xmlDoc->load("$file_dir$value");
            
                $x = $xmlDoc->documentElement;

                $lastdate=$xmlDoc->getElementsByTagName('NewsIdentifier')->item(0)->getElementsByTagName('DateId')->item(0)->nodeValue;

                $xnlocation=strip_tags($this->htmlphasre($xmlDoc, "xn-location", "class"));
                $newsid=$xmlDoc->getElementsByTagName('NewsLines')->item(0)->getElementsByTagName('HeadLine')->item(0)->nodeValue;



               //$maincontent=$xmlDoc->getElementsByTagName('div')->item(1)->nodeValue;

               //$des = preg_replace("/<\/?div[^>]*\>/i", "", $this->xmlphasre($x->getElementsByTagName('div')->item(1)));




                $news_head = addslashes($x->getElementsByTagName('div')->item(0)->getElementsByTagName('h1')->item(0)->nodeValue);
                $issuer = addslashes($x->getElementsByTagName('div')->item(0)->getElementsByTagName('p')->item(0)->nodeValue);
                $story_date = date("Y-m-d H:i:s", strtotime($lastdate));
                //$this->news_model->data_full = file_get_contents("$xml_dir$value");
                $Data = addslashes($this->xmlphasre($x->getElementsByTagName('div')->item(1)));
                $location = $xnlocation;
                $xml_file_name = addslashes($value);
                $desc= $this->xmlphasre($x->getElementsByTagName('div')->item(1));
                $sub = addslashes($x->getElementsByTagName('div')->item(0)->getElementsByTagName('h1')->item(0)->nodeValue);
                $mtitle =substr($sub,0,35);
                $mdesc = substr($desc,0,35);

               $data=array('news_head'=>$news_head,'data'=>$desc,'location'=>$location,'type'=>'prnews','xml_file_name'=>$xml_file_name,'meta_title'=>$mtitle,'meta_description'=>$mdesc);

               $xmlpharser=new Xmlpharse($data);

               $xmlpharser->create($data);

               $oldpath="industry/mediaroom/prnews/".$xml_file_name;
               $newpath="industry/xml_locker/prnews/Backup-XML/".$xml_file_name;

                            if($xml_file_name){

                               File::move($oldpath, $newpath); 
                                }
                               else{

                                   }
            }
        }
    }

/* Method 2  */
  /* //$xml = XmlParser::load('industry/mediaroom/prnews/employees.xml');
		// $xml = XmlParser::load('industry/mediaroom/prnews/201809162345PR_NEWS_USPR_____LA08992.xml');

  $Personnel =$xml->parse([
    'id' => ['uses' => 'Employee.Id'],
    'type' => ['uses' => 'Employee::type']
   
]); 


print_r($Personnel);
exit;
*/
	}

	// End prnews pharsing

	// BUSINESS WIRE pharsing
public function businesswire()
{

   $file_dir="industry/mediaroom/businesswire/";

   $scan_dir =scandir($file_dir);


/* Method 1 */
   foreach ($scan_dir as $key => $value) {
            if ($key > 1) {
            $path_parts = pathinfo( $file_dir.$value);
            if($path_parts['extension']=="html" &&  file_get_contents($file_dir.$value)!=''){

                $htmlDoc = new \DOMDocument();
                $htmlDoc->load($file_dir . "$value");
                $x = $htmlDoc->documentElement;

                $subject = addslashes($x->getElementsByTagName('h1')->item(0)->nodeValue);
                $issuer = "Bussinesswire";
              //  $this->press_model->data_full = file_get_contents($html_dir . "$value");
                $pr_dt = date("Y-m-d H:i:s", strtotime(str_replace('UTC', '', strip_tags($this->htmlphasre($htmlDoc, "bwStoryDateline", "class")))));
                //$this->press_model->description = addslashes($this->htmlphasre($htmlDoc, "bwStoryBody", "id"));
                $description = preg_replace("/<\/?div[^>]*\>/i", "", $this->htmlphasre($htmlDoc, "bwStoryBody", "id"));

     
                //$htmlfilename = addslashes($value);
               
               // $lastid =  $this->press_model->insert_entry();
                $sub = addslashes($x->getElementsByTagName('h1')->item(0)->nodeValue);
                $des = preg_replace("/<\/?div[^>]*\>/i", "", $this->htmlphasre($htmlDoc, "bwStoryBody", "id"));
               
                /*$mtitle = word_limiter(strip_tags(html_entity_decode(ucfirst($sub))), 9);
                $mdesc = word_limiter(strip_tags(html_entity_decode(ucfirst($des))), 22);*/

                $mtitle =substr($sub,0,35);
                $mdesc = substr($des,0,35);

                 $htmlfilename = $value;

              $data=array('news_head'=>$subject,'data'=>$description,'type'=>'bussinesswire','xml_file_name'=>$htmlfilename,'meta_title'=>$mtitle,'meta_description'=>$mdesc);

               $xmlpharser=new Xmlpharse($data);
   
              $xmlpharser->create($data);
                
              $oldpath="industry/mediaroom/businesswire/".$htmlfilename;
    
             //  $newpath="industry/doczipfiles/businesswire/Backup-XML/".$htmlfilename;

               $newpath="industry/xml_locker/businesswire/Backup-XML/".$htmlfilename;

                     if($htmlfilename){

                      File::move($oldpath, $newpath);
                          }
                      else{

                          }
               


                
                
                }
            }
        }



}

// End BUSINESS WIRE pharsing

 //prnews xml pharsing

  public function globalnews(Request $request)
  {


   $file_dir="industry/mediaroom/globalnews/";

   $scan_dir = scandir($file_dir);


   foreach ($scan_dir as $key => $value) {
                 
                  if ($key >1) {

                     $path_parts = pathinfo($file_dir.$value);

               

               if(file_get_contents($file_dir.$value)!=''){

                $xmlDoc = new \DOMDocument();

                $data=$xmlDoc->load("$file_dir$value");
            
                $x = $xmlDoc->documentElement;

               $news_head = addslashes($x->getElementsByTagName('body.head')->item(0)->getElementsByTagName('hl1')->item(0)->nodeValue);
                 
              $issuer = addslashes($x->getElementsByTagName('body.head')->item(0)->getElementsByTagName('distributor')->item(0)->nodeValue);

                $story_date = date("Y-m-d H:i:s", strtotime($x->getElementsByTagName('body.head')->item(0)->getElementsByTagName('dateline')->item(0)->nodeValue));
               
                $Data = addslashes($this->xmlphasre($x->getElementsByTagName('body.content')->item(0)));
                $xml_file_name = addslashes($value);
                $sub = addslashes($x->getElementsByTagName('body.head')->item(0)->getElementsByTagName('hl1')->item(0)->nodeValue);
                $desc = preg_replace("/<\/?div[^>]*\>/i", "", $this->xmlphasre($x->getElementsByTagName('body.content')->item(0)));

                $mtitle =substr($sub,0,35);
                $mdesc = substr($desc,0,35);

               $data=array('news_head'=>$news_head,'data'=>$desc,'type'=>'globalnews','xml_file_name'=>$xml_file_name,'meta_title'=>$mtitle,'meta_description'=>$mdesc);

               $xmlpharser=new Xmlpharse($data);

               $xmlpharser->create($data);

               $oldpath="industry/mediaroom/globalnews/".$xml_file_name;
    
              // $newpath="industry/doczipfiles/globalnews/Backup-XML/".$xml_file_name;
               $newpath="industry/xml_locker/globalnews/Backup-XML/".$xml_file_name;

                            if($xml_file_name){

                               File::move($oldpath, $newpath); 
                                }
                               else{

                                   }

             

            }
        }
    }


  }

  // End prnews pharsing


	private function xmlphasre($sxe) {


        if ($sxe === false) {
            echo 'Error while parsing the document';
            exit;
        }

        $dom_sxe = dom_import_simplexml($sxe);
        if (!$dom_sxe) {
            echo 'Error while converting XML';
            exit;
        }

        $dom = new \DOMDocument();
        $dom_sxe = $dom->importNode($dom_sxe, true);
        $dom_sxe = $dom->appendChild($dom_sxe);
        return $data = $dom->saveHTML();
    }
    private function htmlphasre($Doc, $attributename, $attributetype) {
        $finder = new \DomXPath($Doc);

        $tmp_dom = new \DOMDocument();
        $nodes = $finder->query("//*[contains(@$attributetype, '$attributename')]");
        foreach ($nodes as $node) {
            $tmp_dom->appendChild($tmp_dom->importNode($node, true));
        }
        return $tmp_dom->saveHTML();
    }
}

<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * File upload code without SecurityExceptions and js's
 *
 * Using its configuration with YAML
 * 
 * @author regularlambda
 */ 
class uploadFile {
    
   /**
     * Get options from yaml configuration and set arguments for server directory
     *
     * Totally INSECURE for getting options
     *
     * Returns void sig.
     *
     *  Usage:
     *  <code>
     *   getOpt();
     *  </code>
     * @access public
     * @return void
     * @param NULL
     */
function getOpt(){
    require_once "spyc.php";
    $fileTypeConfGet = Spyc::YAMLLoad('fileTypeConf.yml');
    $fileType = print_r($fileTypeConfGet);
    $path ='/upload/%username%/%year%/%month%/%day%';
    // false don't give a new name, true give a new name.
    $assignedName = FALSE;
    $pathRights = '0777';
    $error = "";
    $isError = FALSE;
    $userName = "";
}

  /**
     * Controls the file for associated file types and file size
     *
     * Checks file for the pre-detected YAML configuration.
     *
     * Returns void sig.
     *
     *  Usage:
     *  <code>
     *   controlFile($file);
     *  </code>
     * @access public
     * @return void
     * @param string $file
     */
 function controlFile($file) {
    if (!array_key_exists ( $file ['type'], $this->fileType )) {
        $this->error='This type couldnt be allowed';
        //Buraya javascript yazılacak "This type couldnt be allowed" uyarısını çalıştıracak
        $this->isError = TRUE;
    }
    else {
        if ($file ['size'] > $this->fileType [$file ['type']]) {
            $this->error="File is too large";
            //Buraya javascript yazılacak "File is too large" uyarısını çalıştıracak
            $this->isError = TRUE;
        }
    }
 }

   /**
     * Upload a file to pre-detected path for deployment
     *
     * 
     * Create directory with umask root rights and move the
     * uploaded file in this directory.
     *
     *  Usage:
     *  <code>
     *   upload($file,$path,$assignedName);
     *  </code>
     * @access public
     * @return void
     * @param string $file, string $path, string $assignedName
     */
function upload($file,$path="",$assignedName="") {
        $this->controlFile($file);
        if ($this->isError) {
                echo $this->error;
        }
        else {
            $ext = substr(basename($file['name']), strrpos(basename($file['name']), '.') + 1);
            //giving name start
            if($this->assignedName){
                $filename = time().".".$ext;
            }
            else{
                $filename = basename($file['name']);
            }

            // Replace path with real value start
            $path_keys = array('%username%' ,'%year%','%month%','%day%');
            $replace_keys = array($userName, date("Y"), date("m"), date("d"));
            // $userName e sağlam bir encapsulation yazılmalı
                for($i=0;$i<=3;$i++) {
                    $this->path =str_replace($path_keys[$i], $replace_keys[$i], $this->path);
                }
            $umask = umask(0);
                if(!is_dir($this->path) && !@mkdir($this->path,0777,true)) {
                    $this->error="Couldn't create folder";
                    //Buraya javascript yazılacak "Couldn't create folder" uyarısını çalıştıracak
                    $this->isError = TRUE;
                }
                if(!@move_uploaded_file($file['tmp_name'], $this->path.'/'.$filename)) {
                    $this->error="Couldn't upload the file to server";
                    //Buraya javascript yazılacak "Couldn't upload the file to server" uyarısını çalıştıracak
                    //SecurityException yazılacak ~Mahmut
                    $this->isError = TRUE;
                 }
        umask($umask);
        }    
    }
}
?>

<?php

class SiteController extends Controller
{

    public function actionIndex()
    {
        if (Yii::app()->request->getIsPostRequest()) {
            $file = CUploadedFile::getInstanceByName('file');
            /* @var $file CUploadedFile */
            if (isset($file)) {
                $s3 = \Aws\S3\S3Client::factory(array(
                        'key' => 'YourAWSKEY',
                        'secret' => 'YourAWSSecret',
                        'region' => \Aws\Common\Enum\Region::SINGAPORE,
                    ));
                /* @var $s3 Aws\S3\S3Client */
                try {
                    $result = $s3->putObject(array(
                        'Bucket' => 'bucketname',
                        'Key' => $file->name,
                        'SourceFile' => $file->tempName,
                        ));
                    /* @var $result \Guzzle\Service\Resource\Model */
                    $url = $result->get("ObjectURL");
                    Yii::app()->user->setFlash('Success', "Upload Success: " . CHtml::link($url, $url));
                } catch (\Aws\S3\Exception\S3Exception $exc) {
                    /* @var $exc \Aws\S3\Exception\S3Exception */
                    $message = $exc->getMessage();
                    Yii::app()->user->setFlash('Failed', "Upload Failed: {$message}");
                }
            }
        }
        $this->render('index');
    }

}

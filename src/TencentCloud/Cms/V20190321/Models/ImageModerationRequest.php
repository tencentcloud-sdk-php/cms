<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageModeration请求参数结构体
 *
 * @method string getFileUrl() 获取文件地址
 * @method void setFileUrl(string $FileUrl) 设置文件地址
 * @method string getFileMD5() 获取文件MD5值
 * @method void setFileMD5(string $FileMD5) 设置文件MD5值
 * @method string getFileContent() 获取文件内容 Base64,与FileUrl必须二填一
 * @method void setFileContent(string $FileContent) 设置文件内容 Base64,与FileUrl必须二填一
 */
class ImageModerationRequest extends AbstractModel
{
    /**
     * @var string 文件地址
     */
    public $FileUrl;

    /**
     * @var string 文件MD5值
     */
    public $FileMD5;

    /**
     * @var string 文件内容 Base64,与FileUrl必须二填一
     */
    public $FileContent;

    /**
     * @param string $FileUrl 文件地址
     * @param string $FileMD5 文件MD5值
     * @param string $FileContent 文件内容 Base64,与FileUrl必须二填一
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileMD5",$param) and $param["FileMD5"] !== null) {
            $this->FileMD5 = $param["FileMD5"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }
    }
}

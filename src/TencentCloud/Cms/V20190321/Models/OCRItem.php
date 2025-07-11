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
 * OCR详情
 *
 * @method Coordinate getTextPosition() 获取检测到的文本坐标信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextPosition(Coordinate $TextPosition) 设置检测到的文本坐标信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEvilType() 获取文本命中恶意违规类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvilType(integer $EvilType) 设置文本命中恶意违规类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTextContent() 获取检测到的文本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextContent(string $TextContent) 设置检测到的文本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRate() 获取文本涉嫌违规分值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRate(integer $Rate) 设置文本涉嫌违规分值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEvilLabel() 获取文本命中具体标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvilLabel(string $EvilLabel) 设置文本命中具体标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeywords() 获取文本命中违规的关键词
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeywords(array $Keywords) 设置文本命中违规的关键词
注意：此字段可能返回 null，表示取不到有效值。
 */
class OCRItem extends AbstractModel
{
    /**
     * @var Coordinate 检测到的文本坐标信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextPosition;

    /**
     * @var integer 文本命中恶意违规类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EvilType;

    /**
     * @var string 检测到的文本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextContent;

    /**
     * @var integer 文本涉嫌违规分值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rate;

    /**
     * @var string 文本命中具体标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EvilLabel;

    /**
     * @var array 文本命中违规的关键词
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keywords;

    /**
     * @param Coordinate $TextPosition 检测到的文本坐标信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EvilType 文本命中恶意违规类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TextContent 检测到的文本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Rate 文本涉嫌违规分值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EvilLabel 文本命中具体标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Keywords 文本命中违规的关键词
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TextPosition",$param) and $param["TextPosition"] !== null) {
            $this->TextPosition = new Coordinate();
            $this->TextPosition->deserialize($param["TextPosition"]);
        }

        if (array_key_exists("EvilType",$param) and $param["EvilType"] !== null) {
            $this->EvilType = $param["EvilType"];
        }

        if (array_key_exists("TextContent",$param) and $param["TextContent"] !== null) {
            $this->TextContent = $param["TextContent"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("EvilLabel",$param) and $param["EvilLabel"] !== null) {
            $this->EvilLabel = $param["EvilLabel"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }
    }
}

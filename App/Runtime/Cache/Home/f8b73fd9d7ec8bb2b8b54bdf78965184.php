<?php if (!defined('THINK_PATH')) exit();?><table class="details-table" style="max-width: 780px;">
    <tbody>
    <tr>
        <td class="label">入库产品：</td>
        <td class="content"><?php echo ($object["name"]); ?></td>
        <td class="label">产品编号：</td>
        <td class="content"><?php echo ($object["sn"]); ?></td>
    </tr>
    <tr>
        <td class="label">产品类型：</td>
        <td class="content"><?php echo ($object["type"]); ?></td>
        <td class="label">采购价格：</td>
        <td class="content"><?php echo ($object["pro_price"]); ?></td>
    </tr>
    <tr>
        <td class="label">入库数量：</td>
        <td class="content"><?php echo ($object["number"]); ?></td>
        <td class="label">经办人：</td>
        <td class="content"><?php echo ($object["staff_name"]); ?></td>
    </tr>
    <tr>
        <td class="label">入库方式：</td>
        <td class="content"><?php echo ($object["mode"]); ?></td>
        <td class="label">录入员：</td>
        <td class="content"><?php echo ($object["enter"]); ?></td>
    </tr>
    <tr>
        <td class="label">入库方式说明：</td>
        <td class="content" colspan="3"><?php echo ($object["mode_explain"]); ?></td>
    </tr>
    </tbody>
</table>
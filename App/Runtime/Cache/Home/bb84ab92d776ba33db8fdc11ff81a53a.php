<?php if (!defined('THINK_PATH')) exit();?><table class="details-table" style="max-width: 780px;">
    <tbody>
    <tr>
        <td class="label">姓名：</td>
        <td class="content"><?php echo ($object["name"]); ?></td>
        <td class="label">性别：</td>
        <td class="content"><?php echo ($object["gender"]); ?></td>
    </tr>
    <tr>
        <td class="label">工号：</td>
        <td class="content"><?php echo ($object["number"]); ?></td>
        <td class="label">职位：</td>
        <td class="content"><?php echo ($object["post"]); ?></td>
    </tr>
    <tr>
        <td class="label">关联帐号：</td>
        <td class="content"><?php echo ($object["user"]["accounts"]); ?></td>
        <td class="label">状态：</td>
        <td class="content"><?php echo ($object["user"]["state"]); ?></td>
    </tr>
    <tr>
        <td class="label">个人简介：</td>
        <td class="content" colspan="3"><?php echo ($object["intro"]); ?></td>
    </tr>
    <tr>
        <td class="label">详情：</td>
        <td class="content" colspan="3"><?php echo ($object["details"]); ?></td>
    </tr>
    </tbody>
</table>
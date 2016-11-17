<?php 

namespace Magestore\Student\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{
    /**
     * {@inheritdoc}
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $data = [
            ['test1'],
            ['test2'],
            ['test3'],
            ['test4'],
            ['test5'],
            ['test6'],
            ['test7'],
            ['test8'],
            ['test9'],
            ['test10'],
        ];

        $columns = ['name'];
        $setup->getConnection()->insertArray(
            $setup->getTable('magestore_student'),
            $columns,
            $data
        );

        $installer->endSetup();
    }
}

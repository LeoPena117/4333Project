<?php

namespace Map;

use \Keystances;
use \KeystancesQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'keystances' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class KeystancesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.KeystancesTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'keystances';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Keystances';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Keystances';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the ID field
     */
    const COL_ID = 'keystances.ID';

    /**
     * the column name for the HealthCare field
     */
    const COL_HEALTHCARE = 'keystances.HealthCare';

    /**
     * the column name for the GunControl field
     */
    const COL_GUNCONTROL = 'keystances.GunControl';

    /**
     * the column name for the WomensRights field
     */
    const COL_WOMENSRIGHTS = 'keystances.WomensRights';

    /**
     * the column name for the MilitarySpending field
     */
    const COL_MILITARYSPENDING = 'keystances.MilitarySpending';

    /**
     * the column name for the ForeignPolicy field
     */
    const COL_FOREIGNPOLICY = 'keystances.ForeignPolicy';

    /**
     * the column name for the Immigration field
     */
    const COL_IMMIGRATION = 'keystances.Immigration';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'Healthcare', 'Guncontrol', 'Womensrights', 'Militaryspending', 'Foreignpolicy', 'Immigration', ),
        self::TYPE_CAMELNAME     => array('id', 'healthcare', 'guncontrol', 'womensrights', 'militaryspending', 'foreignpolicy', 'immigration', ),
        self::TYPE_COLNAME       => array(KeystancesTableMap::COL_ID, KeystancesTableMap::COL_HEALTHCARE, KeystancesTableMap::COL_GUNCONTROL, KeystancesTableMap::COL_WOMENSRIGHTS, KeystancesTableMap::COL_MILITARYSPENDING, KeystancesTableMap::COL_FOREIGNPOLICY, KeystancesTableMap::COL_IMMIGRATION, ),
        self::TYPE_FIELDNAME     => array('ID', 'HealthCare', 'GunControl', 'WomensRights', 'MilitarySpending', 'ForeignPolicy', 'Immigration', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Healthcare' => 1, 'Guncontrol' => 2, 'Womensrights' => 3, 'Militaryspending' => 4, 'Foreignpolicy' => 5, 'Immigration' => 6, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'healthcare' => 1, 'guncontrol' => 2, 'womensrights' => 3, 'militaryspending' => 4, 'foreignpolicy' => 5, 'immigration' => 6, ),
        self::TYPE_COLNAME       => array(KeystancesTableMap::COL_ID => 0, KeystancesTableMap::COL_HEALTHCARE => 1, KeystancesTableMap::COL_GUNCONTROL => 2, KeystancesTableMap::COL_WOMENSRIGHTS => 3, KeystancesTableMap::COL_MILITARYSPENDING => 4, KeystancesTableMap::COL_FOREIGNPOLICY => 5, KeystancesTableMap::COL_IMMIGRATION => 6, ),
        self::TYPE_FIELDNAME     => array('ID' => 0, 'HealthCare' => 1, 'GunControl' => 2, 'WomensRights' => 3, 'MilitarySpending' => 4, 'ForeignPolicy' => 5, 'Immigration' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('keystances');
        $this->setPhpName('Keystances');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Keystances');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('ID', 'Id', 'INTEGER', true, 5, null);
        $this->addColumn('HealthCare', 'Healthcare', 'VARCHAR', true, 10000, null);
        $this->addColumn('GunControl', 'Guncontrol', 'VARCHAR', true, 10000, null);
        $this->addColumn('WomensRights', 'Womensrights', 'VARCHAR', true, 10000, null);
        $this->addColumn('MilitarySpending', 'Militaryspending', 'VARCHAR', true, 10000, null);
        $this->addColumn('ForeignPolicy', 'Foreignpolicy', 'VARCHAR', true, 10000, null);
        $this->addColumn('Immigration', 'Immigration', 'VARCHAR', true, 10000, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return null;
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return '';
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? KeystancesTableMap::CLASS_DEFAULT : KeystancesTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Keystances object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = KeystancesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = KeystancesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + KeystancesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = KeystancesTableMap::OM_CLASS;
            /** @var Keystances $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            KeystancesTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = KeystancesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = KeystancesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Keystances $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                KeystancesTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(KeystancesTableMap::COL_ID);
            $criteria->addSelectColumn(KeystancesTableMap::COL_HEALTHCARE);
            $criteria->addSelectColumn(KeystancesTableMap::COL_GUNCONTROL);
            $criteria->addSelectColumn(KeystancesTableMap::COL_WOMENSRIGHTS);
            $criteria->addSelectColumn(KeystancesTableMap::COL_MILITARYSPENDING);
            $criteria->addSelectColumn(KeystancesTableMap::COL_FOREIGNPOLICY);
            $criteria->addSelectColumn(KeystancesTableMap::COL_IMMIGRATION);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.HealthCare');
            $criteria->addSelectColumn($alias . '.GunControl');
            $criteria->addSelectColumn($alias . '.WomensRights');
            $criteria->addSelectColumn($alias . '.MilitarySpending');
            $criteria->addSelectColumn($alias . '.ForeignPolicy');
            $criteria->addSelectColumn($alias . '.Immigration');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(KeystancesTableMap::DATABASE_NAME)->getTable(KeystancesTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(KeystancesTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(KeystancesTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new KeystancesTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Keystances or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Keystances object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(KeystancesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Keystances) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The Keystances object has no primary key');
        }

        $query = KeystancesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            KeystancesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                KeystancesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the keystances table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return KeystancesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Keystances or Criteria object.
     *
     * @param mixed               $criteria Criteria or Keystances object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(KeystancesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Keystances object
        }


        // Set the correct dbName
        $query = KeystancesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // KeystancesTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
KeystancesTableMap::buildTableMap();

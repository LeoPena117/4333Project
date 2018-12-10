<?php

namespace Base;

use \Keystances as ChildKeystances;
use \KeystancesQuery as ChildKeystancesQuery;
use \Exception;
use Map\KeystancesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'keystances' table.
 *
 *
 *
 * @method     ChildKeystancesQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildKeystancesQuery orderByHealthcare($order = Criteria::ASC) Order by the HealthCare column
 * @method     ChildKeystancesQuery orderByGuncontrol($order = Criteria::ASC) Order by the GunControl column
 * @method     ChildKeystancesQuery orderByWomensrights($order = Criteria::ASC) Order by the WomensRights column
 * @method     ChildKeystancesQuery orderByMilitaryspending($order = Criteria::ASC) Order by the MilitarySpending column
 * @method     ChildKeystancesQuery orderByForeignpolicy($order = Criteria::ASC) Order by the ForeignPolicy column
 * @method     ChildKeystancesQuery orderByImmigration($order = Criteria::ASC) Order by the Immigration column
 *
 * @method     ChildKeystancesQuery groupById() Group by the ID column
 * @method     ChildKeystancesQuery groupByHealthcare() Group by the HealthCare column
 * @method     ChildKeystancesQuery groupByGuncontrol() Group by the GunControl column
 * @method     ChildKeystancesQuery groupByWomensrights() Group by the WomensRights column
 * @method     ChildKeystancesQuery groupByMilitaryspending() Group by the MilitarySpending column
 * @method     ChildKeystancesQuery groupByForeignpolicy() Group by the ForeignPolicy column
 * @method     ChildKeystancesQuery groupByImmigration() Group by the Immigration column
 *
 * @method     ChildKeystancesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildKeystancesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildKeystancesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildKeystancesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildKeystancesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildKeystancesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildKeystances findOne(ConnectionInterface $con = null) Return the first ChildKeystances matching the query
 * @method     ChildKeystances findOneOrCreate(ConnectionInterface $con = null) Return the first ChildKeystances matching the query, or a new ChildKeystances object populated from the query conditions when no match is found
 *
 * @method     ChildKeystances findOneById(int $ID) Return the first ChildKeystances filtered by the ID column
 * @method     ChildKeystances findOneByHealthcare(string $HealthCare) Return the first ChildKeystances filtered by the HealthCare column
 * @method     ChildKeystances findOneByGuncontrol(string $GunControl) Return the first ChildKeystances filtered by the GunControl column
 * @method     ChildKeystances findOneByWomensrights(string $WomensRights) Return the first ChildKeystances filtered by the WomensRights column
 * @method     ChildKeystances findOneByMilitaryspending(string $MilitarySpending) Return the first ChildKeystances filtered by the MilitarySpending column
 * @method     ChildKeystances findOneByForeignpolicy(string $ForeignPolicy) Return the first ChildKeystances filtered by the ForeignPolicy column
 * @method     ChildKeystances findOneByImmigration(string $Immigration) Return the first ChildKeystances filtered by the Immigration column *

 * @method     ChildKeystances requirePk($key, ConnectionInterface $con = null) Return the ChildKeystances by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKeystances requireOne(ConnectionInterface $con = null) Return the first ChildKeystances matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildKeystances requireOneById(int $ID) Return the first ChildKeystances filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKeystances requireOneByHealthcare(string $HealthCare) Return the first ChildKeystances filtered by the HealthCare column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKeystances requireOneByGuncontrol(string $GunControl) Return the first ChildKeystances filtered by the GunControl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKeystances requireOneByWomensrights(string $WomensRights) Return the first ChildKeystances filtered by the WomensRights column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKeystances requireOneByMilitaryspending(string $MilitarySpending) Return the first ChildKeystances filtered by the MilitarySpending column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKeystances requireOneByForeignpolicy(string $ForeignPolicy) Return the first ChildKeystances filtered by the ForeignPolicy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKeystances requireOneByImmigration(string $Immigration) Return the first ChildKeystances filtered by the Immigration column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildKeystances[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildKeystances objects based on current ModelCriteria
 * @method     ChildKeystances[]|ObjectCollection findById(int $ID) Return ChildKeystances objects filtered by the ID column
 * @method     ChildKeystances[]|ObjectCollection findByHealthcare(string $HealthCare) Return ChildKeystances objects filtered by the HealthCare column
 * @method     ChildKeystances[]|ObjectCollection findByGuncontrol(string $GunControl) Return ChildKeystances objects filtered by the GunControl column
 * @method     ChildKeystances[]|ObjectCollection findByWomensrights(string $WomensRights) Return ChildKeystances objects filtered by the WomensRights column
 * @method     ChildKeystances[]|ObjectCollection findByMilitaryspending(string $MilitarySpending) Return ChildKeystances objects filtered by the MilitarySpending column
 * @method     ChildKeystances[]|ObjectCollection findByForeignpolicy(string $ForeignPolicy) Return ChildKeystances objects filtered by the ForeignPolicy column
 * @method     ChildKeystances[]|ObjectCollection findByImmigration(string $Immigration) Return ChildKeystances objects filtered by the Immigration column
 * @method     ChildKeystances[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class KeystancesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\KeystancesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Keystances', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildKeystancesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildKeystancesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildKeystancesQuery) {
            return $criteria;
        }
        $query = new ChildKeystancesQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildKeystances|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The Keystances object has no primary key');
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        throw new LogicException('The Keystances object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildKeystancesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The Keystances object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildKeystancesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The Keystances object has no primary key');
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildKeystancesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(KeystancesTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(KeystancesTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeystancesTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the HealthCare column
     *
     * Example usage:
     * <code>
     * $query->filterByHealthcare('fooValue');   // WHERE HealthCare = 'fooValue'
     * $query->filterByHealthcare('%fooValue%', Criteria::LIKE); // WHERE HealthCare LIKE '%fooValue%'
     * </code>
     *
     * @param     string $healthcare The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildKeystancesQuery The current query, for fluid interface
     */
    public function filterByHealthcare($healthcare = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($healthcare)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeystancesTableMap::COL_HEALTHCARE, $healthcare, $comparison);
    }

    /**
     * Filter the query on the GunControl column
     *
     * Example usage:
     * <code>
     * $query->filterByGuncontrol('fooValue');   // WHERE GunControl = 'fooValue'
     * $query->filterByGuncontrol('%fooValue%', Criteria::LIKE); // WHERE GunControl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $guncontrol The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildKeystancesQuery The current query, for fluid interface
     */
    public function filterByGuncontrol($guncontrol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($guncontrol)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeystancesTableMap::COL_GUNCONTROL, $guncontrol, $comparison);
    }

    /**
     * Filter the query on the WomensRights column
     *
     * Example usage:
     * <code>
     * $query->filterByWomensrights('fooValue');   // WHERE WomensRights = 'fooValue'
     * $query->filterByWomensrights('%fooValue%', Criteria::LIKE); // WHERE WomensRights LIKE '%fooValue%'
     * </code>
     *
     * @param     string $womensrights The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildKeystancesQuery The current query, for fluid interface
     */
    public function filterByWomensrights($womensrights = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($womensrights)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeystancesTableMap::COL_WOMENSRIGHTS, $womensrights, $comparison);
    }

    /**
     * Filter the query on the MilitarySpending column
     *
     * Example usage:
     * <code>
     * $query->filterByMilitaryspending('fooValue');   // WHERE MilitarySpending = 'fooValue'
     * $query->filterByMilitaryspending('%fooValue%', Criteria::LIKE); // WHERE MilitarySpending LIKE '%fooValue%'
     * </code>
     *
     * @param     string $militaryspending The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildKeystancesQuery The current query, for fluid interface
     */
    public function filterByMilitaryspending($militaryspending = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($militaryspending)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeystancesTableMap::COL_MILITARYSPENDING, $militaryspending, $comparison);
    }

    /**
     * Filter the query on the ForeignPolicy column
     *
     * Example usage:
     * <code>
     * $query->filterByForeignpolicy('fooValue');   // WHERE ForeignPolicy = 'fooValue'
     * $query->filterByForeignpolicy('%fooValue%', Criteria::LIKE); // WHERE ForeignPolicy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foreignpolicy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildKeystancesQuery The current query, for fluid interface
     */
    public function filterByForeignpolicy($foreignpolicy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foreignpolicy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeystancesTableMap::COL_FOREIGNPOLICY, $foreignpolicy, $comparison);
    }

    /**
     * Filter the query on the Immigration column
     *
     * Example usage:
     * <code>
     * $query->filterByImmigration('fooValue');   // WHERE Immigration = 'fooValue'
     * $query->filterByImmigration('%fooValue%', Criteria::LIKE); // WHERE Immigration LIKE '%fooValue%'
     * </code>
     *
     * @param     string $immigration The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildKeystancesQuery The current query, for fluid interface
     */
    public function filterByImmigration($immigration = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($immigration)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(KeystancesTableMap::COL_IMMIGRATION, $immigration, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildKeystances $keystances Object to remove from the list of results
     *
     * @return $this|ChildKeystancesQuery The current query, for fluid interface
     */
    public function prune($keystances = null)
    {
        if ($keystances) {
            throw new LogicException('Keystances object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the keystances table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(KeystancesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            KeystancesTableMap::clearInstancePool();
            KeystancesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(KeystancesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(KeystancesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            KeystancesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            KeystancesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // KeystancesQuery

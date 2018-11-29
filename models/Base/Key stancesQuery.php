<?php

namespace Base;

use \Key stances as ChildKey stances;
use \Key stancesQuery as ChildKey stancesQuery;
use \Exception;
use \PDO;
use Map\Key stancesTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'key stances' table.
 *
 *
 *
 * @method     ChildKey stancesQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildKey stancesQuery orderByHealthcare($order = Criteria::ASC) Order by the HealthCare column
 * @method     ChildKey stancesQuery orderByGuncontrol($order = Criteria::ASC) Order by the GunControl column
 * @method     ChildKey stancesQuery orderByWomensrights($order = Criteria::ASC) Order by the WomensRights column
 * @method     ChildKey stancesQuery orderByMilitaryspending($order = Criteria::ASC) Order by the MilitarySpending column
 * @method     ChildKey stancesQuery orderByForeignpolicy($order = Criteria::ASC) Order by the ForeignPolicy column
 * @method     ChildKey stancesQuery orderByImmigration($order = Criteria::ASC) Order by the Immigration column
 *
 * @method     ChildKey stancesQuery groupById() Group by the ID column
 * @method     ChildKey stancesQuery groupByHealthcare() Group by the HealthCare column
 * @method     ChildKey stancesQuery groupByGuncontrol() Group by the GunControl column
 * @method     ChildKey stancesQuery groupByWomensrights() Group by the WomensRights column
 * @method     ChildKey stancesQuery groupByMilitaryspending() Group by the MilitarySpending column
 * @method     ChildKey stancesQuery groupByForeignpolicy() Group by the ForeignPolicy column
 * @method     ChildKey stancesQuery groupByImmigration() Group by the Immigration column
 *
 * @method     ChildKey stancesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildKey stancesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildKey stancesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildKey stancesQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildKey stancesQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildKey stancesQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildKey stances findOne(ConnectionInterface $con = null) Return the first ChildKey stances matching the query
 * @method     ChildKey stances findOneOrCreate(ConnectionInterface $con = null) Return the first ChildKey stances matching the query, or a new ChildKey stances object populated from the query conditions when no match is found
 *
 * @method     ChildKey stances findOneById(int $ID) Return the first ChildKey stances filtered by the ID column
 * @method     ChildKey stances findOneByHealthcare(string $HealthCare) Return the first ChildKey stances filtered by the HealthCare column
 * @method     ChildKey stances findOneByGuncontrol(string $GunControl) Return the first ChildKey stances filtered by the GunControl column
 * @method     ChildKey stances findOneByWomensrights(string $WomensRights) Return the first ChildKey stances filtered by the WomensRights column
 * @method     ChildKey stances findOneByMilitaryspending(string $MilitarySpending) Return the first ChildKey stances filtered by the MilitarySpending column
 * @method     ChildKey stances findOneByForeignpolicy(string $ForeignPolicy) Return the first ChildKey stances filtered by the ForeignPolicy column
 * @method     ChildKey stances findOneByImmigration(string $Immigration) Return the first ChildKey stances filtered by the Immigration column *

 * @method     ChildKey stances requirePk($key, ConnectionInterface $con = null) Return the ChildKey stances by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKey stances requireOne(ConnectionInterface $con = null) Return the first ChildKey stances matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildKey stances requireOneById(int $ID) Return the first ChildKey stances filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKey stances requireOneByHealthcare(string $HealthCare) Return the first ChildKey stances filtered by the HealthCare column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKey stances requireOneByGuncontrol(string $GunControl) Return the first ChildKey stances filtered by the GunControl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKey stances requireOneByWomensrights(string $WomensRights) Return the first ChildKey stances filtered by the WomensRights column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKey stances requireOneByMilitaryspending(string $MilitarySpending) Return the first ChildKey stances filtered by the MilitarySpending column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKey stances requireOneByForeignpolicy(string $ForeignPolicy) Return the first ChildKey stances filtered by the ForeignPolicy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildKey stances requireOneByImmigration(string $Immigration) Return the first ChildKey stances filtered by the Immigration column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildKey stances[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildKey stances objects based on current ModelCriteria
 * @method     ChildKey stances[]|ObjectCollection findById(int $ID) Return ChildKey stances objects filtered by the ID column
 * @method     ChildKey stances[]|ObjectCollection findByHealthcare(string $HealthCare) Return ChildKey stances objects filtered by the HealthCare column
 * @method     ChildKey stances[]|ObjectCollection findByGuncontrol(string $GunControl) Return ChildKey stances objects filtered by the GunControl column
 * @method     ChildKey stances[]|ObjectCollection findByWomensrights(string $WomensRights) Return ChildKey stances objects filtered by the WomensRights column
 * @method     ChildKey stances[]|ObjectCollection findByMilitaryspending(string $MilitarySpending) Return ChildKey stances objects filtered by the MilitarySpending column
 * @method     ChildKey stances[]|ObjectCollection findByForeignpolicy(string $ForeignPolicy) Return ChildKey stances objects filtered by the ForeignPolicy column
 * @method     ChildKey stances[]|ObjectCollection findByImmigration(string $Immigration) Return ChildKey stances objects filtered by the Immigration column
 * @method     ChildKey stances[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class Key stancesQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\Key stancesQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Key stances', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildKey stancesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildKey stancesQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildKey stancesQuery) {
            return $criteria;
        }
        $query = new ChildKey stancesQuery();
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
     * @return ChildKey stances|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(Key stancesTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = Key stancesTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildKey stances A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, HealthCare, GunControl, WomensRights, MilitarySpending, ForeignPolicy, Immigration FROM key stances WHERE ID = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildKey stances $obj */
            $obj = new ChildKey stances();
            $obj->hydrate($row);
            Key stancesTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildKey stances|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildKey stancesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(Key stancesTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildKey stancesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(Key stancesTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildKey stancesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(Key stancesTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(Key stancesTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Key stancesTableMap::COL_ID, $id, $comparison);
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
     * @return $this|ChildKey stancesQuery The current query, for fluid interface
     */
    public function filterByHealthcare($healthcare = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($healthcare)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Key stancesTableMap::COL_HEALTHCARE, $healthcare, $comparison);
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
     * @return $this|ChildKey stancesQuery The current query, for fluid interface
     */
    public function filterByGuncontrol($guncontrol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($guncontrol)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Key stancesTableMap::COL_GUNCONTROL, $guncontrol, $comparison);
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
     * @return $this|ChildKey stancesQuery The current query, for fluid interface
     */
    public function filterByWomensrights($womensrights = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($womensrights)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Key stancesTableMap::COL_WOMENSRIGHTS, $womensrights, $comparison);
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
     * @return $this|ChildKey stancesQuery The current query, for fluid interface
     */
    public function filterByMilitaryspending($militaryspending = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($militaryspending)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Key stancesTableMap::COL_MILITARYSPENDING, $militaryspending, $comparison);
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
     * @return $this|ChildKey stancesQuery The current query, for fluid interface
     */
    public function filterByForeignpolicy($foreignpolicy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foreignpolicy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Key stancesTableMap::COL_FOREIGNPOLICY, $foreignpolicy, $comparison);
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
     * @return $this|ChildKey stancesQuery The current query, for fluid interface
     */
    public function filterByImmigration($immigration = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($immigration)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Key stancesTableMap::COL_IMMIGRATION, $immigration, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildKey stances $key stances Object to remove from the list of results
     *
     * @return $this|ChildKey stancesQuery The current query, for fluid interface
     */
    public function prune($key stances = null)
    {
        if ($key stances) {
            $this->addUsingAlias(Key stancesTableMap::COL_ID, $key stances->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the key stances table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(Key stancesTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            Key stancesTableMap::clearInstancePool();
            Key stancesTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(Key stancesTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(Key stancesTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            Key stancesTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            Key stancesTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // Key stancesQuery

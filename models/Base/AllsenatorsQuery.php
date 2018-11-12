<?php

namespace Base;

use \Allsenators as ChildAllsenators;
use \AllsenatorsQuery as ChildAllsenatorsQuery;
use \Exception;
use \PDO;
use Map\AllsenatorsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'allsenators' table.
 *
 *
 *
 * @method     ChildAllsenatorsQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildAllsenatorsQuery orderByName($order = Criteria::ASC) Order by the Name column
 * @method     ChildAllsenatorsQuery orderByParty($order = Criteria::ASC) Order by the Party column
 * @method     ChildAllsenatorsQuery orderByImgurl($order = Criteria::ASC) Order by the ImgURL column
 * @method     ChildAllsenatorsQuery orderByBio($order = Criteria::ASC) Order by the Bio column
 *
 * @method     ChildAllsenatorsQuery groupById() Group by the ID column
 * @method     ChildAllsenatorsQuery groupByName() Group by the Name column
 * @method     ChildAllsenatorsQuery groupByParty() Group by the Party column
 * @method     ChildAllsenatorsQuery groupByImgurl() Group by the ImgURL column
 * @method     ChildAllsenatorsQuery groupByBio() Group by the Bio column
 *
 * @method     ChildAllsenatorsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildAllsenatorsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildAllsenatorsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildAllsenatorsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildAllsenatorsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildAllsenatorsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildAllsenators findOne(ConnectionInterface $con = null) Return the first ChildAllsenators matching the query
 * @method     ChildAllsenators findOneOrCreate(ConnectionInterface $con = null) Return the first ChildAllsenators matching the query, or a new ChildAllsenators object populated from the query conditions when no match is found
 *
 * @method     ChildAllsenators findOneById(int $ID) Return the first ChildAllsenators filtered by the ID column
 * @method     ChildAllsenators findOneByName(string $Name) Return the first ChildAllsenators filtered by the Name column
 * @method     ChildAllsenators findOneByParty(string $Party) Return the first ChildAllsenators filtered by the Party column
 * @method     ChildAllsenators findOneByImgurl(string $ImgURL) Return the first ChildAllsenators filtered by the ImgURL column
 * @method     ChildAllsenators findOneByBio(string $Bio) Return the first ChildAllsenators filtered by the Bio column *

 * @method     ChildAllsenators requirePk($key, ConnectionInterface $con = null) Return the ChildAllsenators by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildAllsenators requireOne(ConnectionInterface $con = null) Return the first ChildAllsenators matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildAllsenators requireOneById(int $ID) Return the first ChildAllsenators filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildAllsenators requireOneByName(string $Name) Return the first ChildAllsenators filtered by the Name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildAllsenators requireOneByParty(string $Party) Return the first ChildAllsenators filtered by the Party column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildAllsenators requireOneByImgurl(string $ImgURL) Return the first ChildAllsenators filtered by the ImgURL column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildAllsenators requireOneByBio(string $Bio) Return the first ChildAllsenators filtered by the Bio column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildAllsenators[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildAllsenators objects based on current ModelCriteria
 * @method     ChildAllsenators[]|ObjectCollection findById(int $ID) Return ChildAllsenators objects filtered by the ID column
 * @method     ChildAllsenators[]|ObjectCollection findByName(string $Name) Return ChildAllsenators objects filtered by the Name column
 * @method     ChildAllsenators[]|ObjectCollection findByParty(string $Party) Return ChildAllsenators objects filtered by the Party column
 * @method     ChildAllsenators[]|ObjectCollection findByImgurl(string $ImgURL) Return ChildAllsenators objects filtered by the ImgURL column
 * @method     ChildAllsenators[]|ObjectCollection findByBio(string $Bio) Return ChildAllsenators objects filtered by the Bio column
 * @method     ChildAllsenators[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class AllsenatorsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\AllsenatorsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Allsenators', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildAllsenatorsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildAllsenatorsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildAllsenatorsQuery) {
            return $criteria;
        }
        $query = new ChildAllsenatorsQuery();
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
     * @return ChildAllsenators|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(AllsenatorsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = AllsenatorsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildAllsenators A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, Name, Party, ImgURL, Bio FROM allsenators WHERE ID = :p0';
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
            /** @var ChildAllsenators $obj */
            $obj = new ChildAllsenators();
            $obj->hydrate($row);
            AllsenatorsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildAllsenators|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildAllsenatorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AllsenatorsTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildAllsenatorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AllsenatorsTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildAllsenatorsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(AllsenatorsTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(AllsenatorsTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllsenatorsTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the Name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE Name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE Name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildAllsenatorsQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllsenatorsTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the Party column
     *
     * Example usage:
     * <code>
     * $query->filterByParty('fooValue');   // WHERE Party = 'fooValue'
     * $query->filterByParty('%fooValue%', Criteria::LIKE); // WHERE Party LIKE '%fooValue%'
     * </code>
     *
     * @param     string $party The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildAllsenatorsQuery The current query, for fluid interface
     */
    public function filterByParty($party = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($party)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllsenatorsTableMap::COL_PARTY, $party, $comparison);
    }

    /**
     * Filter the query on the ImgURL column
     *
     * Example usage:
     * <code>
     * $query->filterByImgurl('fooValue');   // WHERE ImgURL = 'fooValue'
     * $query->filterByImgurl('%fooValue%', Criteria::LIKE); // WHERE ImgURL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $imgurl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildAllsenatorsQuery The current query, for fluid interface
     */
    public function filterByImgurl($imgurl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($imgurl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllsenatorsTableMap::COL_IMGURL, $imgurl, $comparison);
    }

    /**
     * Filter the query on the Bio column
     *
     * Example usage:
     * <code>
     * $query->filterByBio('fooValue');   // WHERE Bio = 'fooValue'
     * $query->filterByBio('%fooValue%', Criteria::LIKE); // WHERE Bio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bio The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildAllsenatorsQuery The current query, for fluid interface
     */
    public function filterByBio($bio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bio)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllsenatorsTableMap::COL_BIO, $bio, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildAllsenators $allsenators Object to remove from the list of results
     *
     * @return $this|ChildAllsenatorsQuery The current query, for fluid interface
     */
    public function prune($allsenators = null)
    {
        if ($allsenators) {
            $this->addUsingAlias(AllsenatorsTableMap::COL_ID, $allsenators->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the allsenators table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(AllsenatorsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AllsenatorsTableMap::clearInstancePool();
            AllsenatorsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(AllsenatorsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(AllsenatorsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            AllsenatorsTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            AllsenatorsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // AllsenatorsQuery
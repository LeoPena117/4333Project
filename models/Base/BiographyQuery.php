<?php

namespace Base;

use \Biography as ChildBiography;
use \BiographyQuery as ChildBiographyQuery;
use \Exception;
use \PDO;
use Map\BiographyTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'biography' table.
 *
 *
 *
 * @method     ChildBiographyQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method     ChildBiographyQuery orderByBorn($order = Criteria::ASC) Order by the Born column
 * @method     ChildBiographyQuery orderByAge($order = Criteria::ASC) Order by the Age column
 * @method     ChildBiographyQuery orderBySpouse($order = Criteria::ASC) Order by the Spouse column
 * @method     ChildBiographyQuery orderByEducation($order = Criteria::ASC) Order by the Education column
 * @method     ChildBiographyQuery orderByFk($order = Criteria::ASC) Order by the FK column
 *
 * @method     ChildBiographyQuery groupById() Group by the ID column
 * @method     ChildBiographyQuery groupByBorn() Group by the Born column
 * @method     ChildBiographyQuery groupByAge() Group by the Age column
 * @method     ChildBiographyQuery groupBySpouse() Group by the Spouse column
 * @method     ChildBiographyQuery groupByEducation() Group by the Education column
 * @method     ChildBiographyQuery groupByFk() Group by the FK column
 *
 * @method     ChildBiographyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBiographyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBiographyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBiographyQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBiographyQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBiographyQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBiography findOne(ConnectionInterface $con = null) Return the first ChildBiography matching the query
 * @method     ChildBiography findOneOrCreate(ConnectionInterface $con = null) Return the first ChildBiography matching the query, or a new ChildBiography object populated from the query conditions when no match is found
 *
 * @method     ChildBiography findOneById(int $ID) Return the first ChildBiography filtered by the ID column
 * @method     ChildBiography findOneByBorn(string $Born) Return the first ChildBiography filtered by the Born column
 * @method     ChildBiography findOneByAge(int $Age) Return the first ChildBiography filtered by the Age column
 * @method     ChildBiography findOneBySpouse(string $Spouse) Return the first ChildBiography filtered by the Spouse column
 * @method     ChildBiography findOneByEducation(string $Education) Return the first ChildBiography filtered by the Education column
 * @method     ChildBiography findOneByFk(int $FK) Return the first ChildBiography filtered by the FK column *

 * @method     ChildBiography requirePk($key, ConnectionInterface $con = null) Return the ChildBiography by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBiography requireOne(ConnectionInterface $con = null) Return the first ChildBiography matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBiography requireOneById(int $ID) Return the first ChildBiography filtered by the ID column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBiography requireOneByBorn(string $Born) Return the first ChildBiography filtered by the Born column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBiography requireOneByAge(int $Age) Return the first ChildBiography filtered by the Age column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBiography requireOneBySpouse(string $Spouse) Return the first ChildBiography filtered by the Spouse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBiography requireOneByEducation(string $Education) Return the first ChildBiography filtered by the Education column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBiography requireOneByFk(int $FK) Return the first ChildBiography filtered by the FK column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBiography[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildBiography objects based on current ModelCriteria
 * @method     ChildBiography[]|ObjectCollection findById(int $ID) Return ChildBiography objects filtered by the ID column
 * @method     ChildBiography[]|ObjectCollection findByBorn(string $Born) Return ChildBiography objects filtered by the Born column
 * @method     ChildBiography[]|ObjectCollection findByAge(int $Age) Return ChildBiography objects filtered by the Age column
 * @method     ChildBiography[]|ObjectCollection findBySpouse(string $Spouse) Return ChildBiography objects filtered by the Spouse column
 * @method     ChildBiography[]|ObjectCollection findByEducation(string $Education) Return ChildBiography objects filtered by the Education column
 * @method     ChildBiography[]|ObjectCollection findByFk(int $FK) Return ChildBiography objects filtered by the FK column
 * @method     ChildBiography[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class BiographyQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\BiographyQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Biography', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBiographyQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBiographyQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildBiographyQuery) {
            return $criteria;
        }
        $query = new ChildBiographyQuery();
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
     * @return ChildBiography|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BiographyTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BiographyTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildBiography A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ID, Born, Age, Spouse, Education, FK FROM biography WHERE ID = :p0';
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
            /** @var ChildBiography $obj */
            $obj = new ChildBiography();
            $obj->hydrate($row);
            BiographyTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildBiography|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildBiographyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BiographyTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildBiographyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BiographyTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildBiographyQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(BiographyTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(BiographyTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BiographyTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the Born column
     *
     * Example usage:
     * <code>
     * $query->filterByBorn('fooValue');   // WHERE Born = 'fooValue'
     * $query->filterByBorn('%fooValue%', Criteria::LIKE); // WHERE Born LIKE '%fooValue%'
     * </code>
     *
     * @param     string $born The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBiographyQuery The current query, for fluid interface
     */
    public function filterByBorn($born = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($born)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BiographyTableMap::COL_BORN, $born, $comparison);
    }

    /**
     * Filter the query on the Age column
     *
     * Example usage:
     * <code>
     * $query->filterByAge(1234); // WHERE Age = 1234
     * $query->filterByAge(array(12, 34)); // WHERE Age IN (12, 34)
     * $query->filterByAge(array('min' => 12)); // WHERE Age > 12
     * </code>
     *
     * @param     mixed $age The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBiographyQuery The current query, for fluid interface
     */
    public function filterByAge($age = null, $comparison = null)
    {
        if (is_array($age)) {
            $useMinMax = false;
            if (isset($age['min'])) {
                $this->addUsingAlias(BiographyTableMap::COL_AGE, $age['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($age['max'])) {
                $this->addUsingAlias(BiographyTableMap::COL_AGE, $age['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BiographyTableMap::COL_AGE, $age, $comparison);
    }

    /**
     * Filter the query on the Spouse column
     *
     * Example usage:
     * <code>
     * $query->filterBySpouse('fooValue');   // WHERE Spouse = 'fooValue'
     * $query->filterBySpouse('%fooValue%', Criteria::LIKE); // WHERE Spouse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spouse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBiographyQuery The current query, for fluid interface
     */
    public function filterBySpouse($spouse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spouse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BiographyTableMap::COL_SPOUSE, $spouse, $comparison);
    }

    /**
     * Filter the query on the Education column
     *
     * Example usage:
     * <code>
     * $query->filterByEducation('fooValue');   // WHERE Education = 'fooValue'
     * $query->filterByEducation('%fooValue%', Criteria::LIKE); // WHERE Education LIKE '%fooValue%'
     * </code>
     *
     * @param     string $education The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBiographyQuery The current query, for fluid interface
     */
    public function filterByEducation($education = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($education)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BiographyTableMap::COL_EDUCATION, $education, $comparison);
    }

    /**
     * Filter the query on the FK column
     *
     * Example usage:
     * <code>
     * $query->filterByFk(1234); // WHERE FK = 1234
     * $query->filterByFk(array(12, 34)); // WHERE FK IN (12, 34)
     * $query->filterByFk(array('min' => 12)); // WHERE FK > 12
     * </code>
     *
     * @param     mixed $fk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBiographyQuery The current query, for fluid interface
     */
    public function filterByFk($fk = null, $comparison = null)
    {
        if (is_array($fk)) {
            $useMinMax = false;
            if (isset($fk['min'])) {
                $this->addUsingAlias(BiographyTableMap::COL_FK, $fk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fk['max'])) {
                $this->addUsingAlias(BiographyTableMap::COL_FK, $fk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BiographyTableMap::COL_FK, $fk, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildBiography $biography Object to remove from the list of results
     *
     * @return $this|ChildBiographyQuery The current query, for fluid interface
     */
    public function prune($biography = null)
    {
        if ($biography) {
            $this->addUsingAlias(BiographyTableMap::COL_ID, $biography->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the biography table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BiographyTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BiographyTableMap::clearInstancePool();
            BiographyTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(BiographyTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BiographyTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            BiographyTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            BiographyTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // BiographyQuery
